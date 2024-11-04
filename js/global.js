"use strict";

function createStore(props) {
  var store = props;
  if (!store.config) {
    store.config = {};
    store.config.globalStore = true;
  } else if (store.config.globalStore == null) {
    store.config.globalStore = true;
  }
  const $this = store.config.globalStore ? window : {};
  var VariablesKeys = Object.keys(store.variables);
  var ReducersKeys = Object.keys(store.reducers);
  for (let i = 0; i < ReducersKeys.length; i++) {
    if (ReducersKeys[i] !== VariablesKeys[i]) {
      throw new Error(`Undefined reducer: ${ReducersKeys[i]}`);
    }
  }
  const createStoreObject = ($this) => {
    var obj = {};
    VariablesKeys.forEach((key) => {
      obj[key] = {
        value: store.variables[key],
        subs: [],
        onUpdate: function (callback) {
          callback($this["Store"][key].value);
          $this["Store"][key].subs.push(callback);
        },
        update: function () {
          if ($this["Store"][key].subs.length > 0) {
            $this["Store"][key].subs.forEach((callback) => {
              callback($this["Store"][key].value);
            });
          }
        },
      };
      //$this["Store"][key].value
      Object.keys(store.reducers[key]).forEach((funName) => {
        obj[key][funName] = (args = $this["Store"][key].value) => {
          var retValue = store.reducers[key][funName](
            args,
            args !== $this["Store"][key].value
              ? $this["Store"][key].value
              : null
          );
          if (retValue != null) {
            $this["Store"][key].value = retValue;
            $this["Store"][key].update();
          }
        };
      });
    });
    return obj;
  };
  Object.defineProperty($this, "Store", {
    value: createStoreObject($this),
    writable: false,
    enumerable: true,
    configurable: false,
  });
  return $this["Store"];
}

createStore({
	variables: {
		counter: 0
	},
	reducers: {
		counter: {
			add: (v) => v + 1,
			min: (v) => v - 1
		}
	},
})
