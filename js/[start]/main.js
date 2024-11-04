"use strict";
console.log(Store.counter.value);

var h1 = document.querySelector('h1');
var btn1 = document.querySelector('#p');
var btn2 = document.querySelector('#m');

Store.counter.onUpdate((v) => h1.innerText = v);
btn1.onclick = () => Store.counter.add()
btn2.onclick = () => Store.counter.min()
