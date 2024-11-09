<?php
// @formatter:off
// phpcs:ignoreFile

namespace Illuminate\Support\Facades {
    class Config
    {
        /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function has($key)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->has($key);
        }

        /**
         * Get the specified configuration value.
         *
         * @param array|string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function get($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->get($key, $default);
        }

        /**
         * Get many configuration values.
         *
         * @param array $keys
         * @return array
         * @static
         */
        public static function getMany($keys)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->getMany($keys);
        }

        /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function set($key, $value = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->set($key, $value);
        }

        /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function prepend($key, $value)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->prepend($key, $value);
        }

        /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function push($key, $value)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->push($key, $value);
        }

        /**
         * Get all of the configuration items for the application.
         *
         * @return array
         * @static
         */
        public static function all()
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->all();
        }

        /**
         * Determine if the given configuration option exists.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function offsetExists($key)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->offsetExists($key);
        }

        /**
         * Get a configuration option.
         *
         * @param string $key
         * @return mixed
         * @static
         */
        public static function offsetGet($key)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->offsetGet($key);
        }

        /**
         * Set a configuration option.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function offsetSet($key, $value)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->offsetSet($key, $value);
        }

        /**
         * Unset a configuration option.
         *
         * @param string $key
         * @return void
         * @static
         */
        public static function offsetUnset($key)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->offsetUnset($key);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Config\Repository::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @throws \ReflectionException
         * @static
         * @return void
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Config\Repository::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Config\Repository::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Config\Repository::flushMacros();
        }

    }
    class DB {
        /**
         * Get a database connection instance.
         *
         * @param string|null $name
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static function connection($name = null)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->connection($name);
        }
        /**
         * Register a custom Doctrine type.
         *
         * @param string $class
         * @param string $name
         * @param string $type
         * @return void
         * @throws \Doctrine\DBAL\DBALException
         * @throws \RuntimeException
         * @static
         */
        public static function registerDoctrineType($class, $name, $type)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->registerDoctrineType($class, $name, $type);
        }
        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->purge($name);
        }
        /**
         * Disconnect from the given database.
         *
         * @param string|null $name
         * @return void
         * @static
         */
        public static function disconnect($name = null)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->disconnect($name);
        }
        /**
         * Reconnect to the given database.
         *
         * @param string|null $name
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static function reconnect($name = null)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->reconnect($name);
        }
        /**
         * Set the default database connection for the callback execution.
         *
         * @param string $name
         * @param callable $callback
         * @return mixed
         * @static
         */
        public static function usingConnection($name, $callback)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->usingConnection($name, $callback);
        }
        /**
         * Get the default connection name.
         *
         * @return string
         * @static
         */
        public static function getDefaultConnection()
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->getDefaultConnection();
        }
        /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultConnection($name)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->setDefaultConnection($name);
        }
        /**
         * Get all of the support drivers.
         *
         * @return string[]
         * @static
         */
        public static function supportedDrivers()
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->supportedDrivers();
        }
        /**
         * Get all of the drivers that are actually available.
         *
         * @return string[]
         * @static
         */
        public static function availableDrivers()
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->availableDrivers();
        }
        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void
         * @static
         */
        public static function extend($name, $resolver)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->extend($name, $resolver);
        }
        /**
         * Remove an extension connection resolver.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function forgetExtension($name)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->forgetExtension($name);
        }
        /**
         * Return all of the created connections.
         *
         * @return array<string, \Illuminate\Database\Connection>
         * @static
         */
        public static function getConnections()
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->getConnections();
        }
        /**
         * Set the database reconnector callback.
         *
         * @param callable $reconnector
         * @return void
         * @static
         */
        public static function setReconnector($reconnector)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->setReconnector($reconnector);
        }
        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Database\DatabaseManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->setApplication($app);
        }
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Database\DatabaseManager::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Database\DatabaseManager::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Database\DatabaseManager::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Database\DatabaseManager::flushMacros();
        }
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->macroCall($method, $parameters);
        }
        /**
         * Determine if the connected database is a MariaDB database.
         *
         * @return bool
         * @static
         */
        public static function isMaria()
        {
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->isMaria();
        }
        /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\MySqlBuilder
         * @static
         */
        public static function getSchemaBuilder()
        {
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getSchemaBuilder();
        }
        /**
         * Get the schema state for the connection.
         *
         * @param \Illuminate\Filesystem\Filesystem|null $files
         * @param callable|null $processFactory
         * @return \Illuminate\Database\Schema\MySqlSchemaState
         * @static
         */
        public static function getSchemaState($files = null, $processFactory = null)
        {
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getSchemaState($files, $processFactory);
        }
        /**
         * Set the query grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultQueryGrammar()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->useDefaultQueryGrammar();
        }
        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultSchemaGrammar()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->useDefaultSchemaGrammar();
        }
        /**
         * Set the query post processor to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultPostProcessor()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->useDefaultPostProcessor();
        }
        /**
         * Begin a fluent query against a database table.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|string $table
         * @param string|null $as
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function table($table, $as = null)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->table($table, $as);
        }
        /**
         * Get a new query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function query()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->query();
        }
        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return mixed
         * @static
         */
        public static function selectOne($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->selectOne($query, $bindings, $useReadPdo);
        }
        /**
         * Run a select statement and return the first column of the first row.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return mixed
         * @throws \Illuminate\Database\MultipleColumnsSelectedException
         * @static
         */
        public static function scalar($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->scalar($query, $bindings, $useReadPdo);
        }
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return array
         * @static
         */
        public static function selectFromWriteConnection($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->selectFromWriteConnection($query, $bindings);
        }
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return array
         * @static
         */
        public static function select($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->select($query, $bindings, $useReadPdo);
        }
        /**
         * Run a select statement against the database and returns a generator.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return \Generator
         * @static
         */
        public static function cursor($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->cursor($query, $bindings, $useReadPdo);
        }
        /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return bool
         * @static
         */
        public static function insert($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->insert($query, $bindings);
        }
        /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function update($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->update($query, $bindings);
        }
        /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function delete($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->delete($query, $bindings);
        }
        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         * @return bool
         * @static
         */
        public static function statement($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->statement($query, $bindings);
        }
        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function affectingStatement($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->affectingStatement($query, $bindings);
        }
        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
         * @return bool
         * @static
         */
        public static function unprepared($query)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->unprepared($query);
        }
        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param \Closure $callback
         * @return array
         * @static
         */
        public static function pretend($callback)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->pretend($callback);
        }
        /**
         * Bind values to their parameters in the given statement.
         *
         * @param \PDOStatement $statement
         * @param array $bindings
         * @return void
         * @static
         */
        public static function bindValues($statement, $bindings)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->bindValues($statement, $bindings);
        }
        /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         * @return array
         * @static
         */
        public static function prepareBindings($bindings)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->prepareBindings($bindings);
        }
        /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         * @return void
         * @static
         */
        public static function logQuery($query, $bindings, $time = null)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->logQuery($query, $bindings, $time);
        }
        /**
         * Register a callback to be invoked when the connection queries for longer than a given amount of time.
         *
         * @param \DateTimeInterface|\Carbon\CarbonInterval|float|int $threshold
         * @param callable $handler
         * @return void
         * @static
         */
        public static function whenQueryingForLongerThan($threshold, $handler)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->whenQueryingForLongerThan($threshold, $handler);
        }
        /**
         * Allow all the query duration handlers to run again, even if they have already run.
         *
         * @return void
         * @static
         */
        public static function allowQueryDurationHandlersToRunAgain()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->allowQueryDurationHandlersToRunAgain();
        }
        /**
         * Get the duration of all run queries in milliseconds.
         *
         * @return float
         * @static
         */
        public static function totalQueryDuration()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->totalQueryDuration();
        }
        /**
         * Reset the duration of all run queries.
         *
         * @return void
         * @static
         */
        public static function resetTotalQueryDuration()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->resetTotalQueryDuration();
        }
        /**
         * Register a hook to be run just before a database query is executed.
         *
         * @param \Closure $callback
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function beforeExecuting($callback)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->beforeExecuting($callback);
        }
        /**
         * Register a database query listener with the connection.
         *
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function listen($callback)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->listen($callback);
        }
        /**
         * Get a new raw query expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression
         * @static
         */
        public static function raw($value)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->raw($value);
        }
        /**
         * Determine if the database connection has modified any database records.
         *
         * @return bool
         * @static
         */
        public static function hasModifiedRecords()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->hasModifiedRecords();
        }
        /**
         * Indicate if any records have been modified.
         *
         * @param bool $value
         * @return void
         * @static
         */
        public static function recordsHaveBeenModified($value = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->recordsHaveBeenModified($value);
        }
        /**
         * Set the record modification state.
         *
         * @param bool $value
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setRecordModificationState($value)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setRecordModificationState($value);
        }
        /**
         * Reset the record modification state.
         *
         * @return void
         * @static
         */
        public static function forgetRecordModificationState()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->forgetRecordModificationState();
        }
        /**
         * Indicate that the connection should use the write PDO connection for reads.
         *
         * @param bool $value
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function useWriteConnectionWhenReading($value = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->useWriteConnectionWhenReading($value);
        }
        /**
         * Is Doctrine available?
         *
         * @return bool
         * @static
         */
        public static function isDoctrineAvailable()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->isDoctrineAvailable();
        }
        /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
         * @return \Doctrine\DBAL\Schema\Column
         * @static
         */
        public static function getDoctrineColumn($table, $column)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getDoctrineColumn($table, $column);
        }
        /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager
         * @static
         */
        public static function getDoctrineSchemaManager()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getDoctrineSchemaManager();
        }
        /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection
         * @static
         */
        public static function getDoctrineConnection()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getDoctrineConnection();
        }
        /**
         * Get the current PDO connection.
         *
         * @return \PDO
         * @static
         */
        public static function getPdo()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getPdo();
        }
        /**
         * Get the current PDO connection parameter without executing any reconnect logic.
         *
         * @return \PDO|\Closure|null
         * @static
         */
        public static function getRawPdo()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getRawPdo();
        }
        /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO
         * @static
         */
        public static function getReadPdo()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getReadPdo();
        }
        /**
         * Get the current read PDO connection parameter without executing any reconnect logic.
         *
         * @return \PDO|\Closure|null
         * @static
         */
        public static function getRawReadPdo()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getRawReadPdo();
        }
        /**
         * Set the PDO connection.
         *
         * @param \PDO|\Closure|null $pdo
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setPdo($pdo)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setPdo($pdo);
        }
        /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|\Closure|null $pdo
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setReadPdo($pdo)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setReadPdo($pdo);
        }
        /**
         * Get the database connection name.
         *
         * @return string|null
         * @static
         */
        public static function getName()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getName();
        }
        /**
         * Get the database connection full name.
         *
         * @return string|null
         * @static
         */
        public static function getNameWithReadWriteType()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getNameWithReadWriteType();
        }
        /**
         * Get an option from the configuration options.
         *
         * @param string|null $option
         * @return mixed
         * @static
         */
        public static function getConfig($option = null)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getConfig($option);
        }
        /**
         * Get the PDO driver name.
         *
         * @return string
         * @static
         */
        public static function getDriverName()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getDriverName();
        }
        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar
         * @static
         */
        public static function getQueryGrammar()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getQueryGrammar();
        }
        /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar $grammar
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setQueryGrammar($grammar)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setQueryGrammar($grammar);
        }
        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar
         * @static
         */
        public static function getSchemaGrammar()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getSchemaGrammar();
        }
        /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar $grammar
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setSchemaGrammar($grammar)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setSchemaGrammar($grammar);
        }
        /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor
         * @static
         */
        public static function getPostProcessor()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getPostProcessor();
        }
        /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor $processor
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setPostProcessor($processor)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setPostProcessor($processor);
        }
        /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
        public static function getEventDispatcher()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getEventDispatcher();
        }
        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setEventDispatcher($events)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setEventDispatcher($events);
        }
        /**
         * Unset the event dispatcher for this connection.
         *
         * @return void
         * @static
         */
        public static function unsetEventDispatcher()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->unsetEventDispatcher();
        }
        /**
         * Set the transaction manager instance on the connection.
         *
         * @param \Illuminate\Database\DatabaseTransactionsManager $manager
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setTransactionManager($manager)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setTransactionManager($manager);
        }
        /**
         * Unset the transaction manager for this connection.
         *
         * @return void
         * @static
         */
        public static function unsetTransactionManager()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->unsetTransactionManager();
        }
        /**
         * Determine if the connection is in a "dry run".
         *
         * @return bool
         * @static
         */
        public static function pretending()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->pretending();
        }
        /**
         * Get the connection query log.
         *
         * @return array
         * @static
         */
        public static function getQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getQueryLog();
        }
        /**
         * Clear the query log.
         *
         * @return void
         * @static
         */
        public static function flushQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->flushQueryLog();
        }
        /**
         * Enable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static function enableQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->enableQueryLog();
        }
        /**
         * Disable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static function disableQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->disableQueryLog();
        }
        /**
         * Determine whether we're logging queries.
         *
         * @return bool
         * @static
         */
        public static function logging()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->logging();
        }
        /**
         * Get the name of the connected database.
         *
         * @return string
         * @static
         */
        public static function getDatabaseName()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getDatabaseName();
        }
        /**
         * Set the name of the connected database.
         *
         * @param string $database
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setDatabaseName($database)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setDatabaseName($database);
        }
        /**
         * Set the read / write type of the connection.
         *
         * @param string|null $readWriteType
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setReadWriteType($readWriteType)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setReadWriteType($readWriteType);
        }
        /**
         * Get the table prefix for the connection.
         *
         * @return string
         * @static
         */
        public static function getTablePrefix()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getTablePrefix();
        }
        /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setTablePrefix($prefix)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setTablePrefix($prefix);
        }
        /**
         * Set the table prefix and return the grammar.
         *
         * @param \Illuminate\Database\Grammar $grammar
         * @return \Illuminate\Database\Grammar
         * @static
         */
        public static function withTablePrefix($grammar)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->withTablePrefix($grammar);
        }
        /**
         * Register a connection resolver.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function resolverFor($driver, $callback)
        {            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::resolverFor($driver, $callback);
        }
        /**
         * Get the connection resolver for the given driver.
         *
         * @param string $driver
         * @return mixed
         * @static
         */
        public static function getResolver($driver)
        {            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getResolver($driver);
        }
        /**
         * Execute a Closure within a transaction.
         *
         * @param \Closure $callback
         * @param int $attempts
         * @return mixed
         * @throws \Throwable
         * @static
         */
        public static function transaction($callback, $attempts = 1)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->transaction($callback, $attempts);
        }
        /**
         * Start a new database transaction.
         *
         * @return void
         * @throws \Throwable
         * @static
         */
        public static function beginTransaction()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->beginTransaction();
        }
        /**
         * Commit the active database transaction.
         *
         * @return void
         * @throws \Throwable
         * @static
         */
        public static function commit()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->commit();
        }
        /**
         * Rollback the active database transaction.
         *
         * @param int|null $toLevel
         * @return void
         * @throws \Throwable
         * @static
         */
        public static function rollBack($toLevel = null)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->rollBack($toLevel);
        }
        /**
         * Get the number of active transactions.
         *
         * @return int
         * @static
         */
        public static function transactionLevel()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->transactionLevel();
        }
        /**
         * Execute the callback after a transaction commits.
         *
         * @param callable $callback
         * @return void
         * @throws \RuntimeException
         * @static
         */
        public static function afterCommit($callback)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->afterCommit($callback);
        }

    }
    class Event {
        /**
         * Register an event listener with the dispatcher.
         *
         * @param \Closure|string|array $events
         * @param \Closure|string|array|null $listener
         * @return void
         * @static
         */
        public static function listen($events, $listener = null)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->listen($events, $listener);
        }
        /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
         * @return bool
         * @static
         */
        public static function hasListeners($eventName)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->hasListeners($eventName);
        }
        /**
         * Determine if the given event has any wildcard listeners.
         *
         * @param string $eventName
         * @return bool
         * @static
         */
        public static function hasWildcardListeners($eventName)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->hasWildcardListeners($eventName);
        }
        /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
         * @param object|array $payload
         * @return void
         * @static
         */
        public static function push($event, $payload = [])
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->push($event, $payload);
        }
        /**
         * Flush a set of pushed events.
         *
         * @param string $event
         * @return void
         * @static
         */
        public static function flush($event)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->flush($event);
        }
        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         * @return void
         * @static
         */
        public static function subscribe($subscriber)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->subscribe($subscriber);
        }
        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
         * @param mixed $payload
         * @return array|null
         * @static
         */
        public static function until($event, $payload = [])
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->until($event, $payload);
        }
        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null
         * @static
         */
        public static function dispatch($event, $payload = [], $halt = false)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->dispatch($event, $payload, $halt);
        }
        /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
         * @return array
         * @static
         */
        public static function getListeners($eventName)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->getListeners($eventName);
        }
        /**
         * Register an event listener with the dispatcher.
         *
         * @param \Closure|string|array $listener
         * @param bool $wildcard
         * @return \Closure
         * @static
         */
        public static function makeListener($listener, $wildcard = false)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->makeListener($listener, $wildcard);
        }
        /**
         * Create a class based listener using the IoC container.
         *
         * @param string $listener
         * @param bool $wildcard
         * @return \Closure
         * @static
         */
        public static function createClassListener($listener, $wildcard = false)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->createClassListener($listener, $wildcard);
        }
        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         * @return void
         * @static
         */
        public static function forget($event)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->forget($event);
        }
        /**
         * Forget all of the pushed listeners.
         *
         * @return void
         * @static
         */
        public static function forgetPushed()
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->forgetPushed();
        }
        /**
         * Set the queue resolver implementation.
         *
         * @param callable $resolver
         * @return \Illuminate\Events\Dispatcher
         * @static
         */
        public static function setQueueResolver($resolver)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->setQueueResolver($resolver);
        }
        /**
         * Gets the raw, unprepared listeners.
         *
         * @return array
         * @static
         */
        public static function getRawListeners()
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->getRawListeners();
        }
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Events\Dispatcher::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Events\Dispatcher::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Events\Dispatcher::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Events\Dispatcher::flushMacros();
        }
        /**
         * Specify the events that should be dispatched instead of faked.
         *
         * @param array|string $eventsToDispatch
         * @return \Illuminate\Support\Testing\Fakes\EventFake
         * @static
         */
        public static function except($eventsToDispatch)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            return $instance->except($eventsToDispatch);
        }
        /**
         * Assert if an event has a listener attached to it.
         *
         * @param string $expectedEvent
         * @param string|array $expectedListener
         * @return void
         * @static
         */
        public static function assertListening($expectedEvent, $expectedListener)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertListening($expectedEvent, $expectedListener);
        }
        /**
         * Assert if an event was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $event
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertDispatched($event, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertDispatched($event, $callback);
        }
        /**
         * Assert if an event was dispatched a number of times.
         *
         * @param string $event
         * @param int $times
         * @return void
         * @static
         */
        public static function assertDispatchedTimes($event, $times = 1)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertDispatchedTimes($event, $times);
        }
        /**
         * Determine if an event was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $event
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotDispatched($event, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertNotDispatched($event, $callback);
        }
        /**
         * Assert that no events were dispatched.
         *
         * @return void
         * @static
         */
        public static function assertNothingDispatched()
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertNothingDispatched();
        }
        /**
         * Get all of the events matching a truth-test callback.
         *
         * @param string $event
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function dispatched($event, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            return $instance->dispatched($event, $callback);
        }
        /**
         * Determine if the given event has been dispatched.
         *
         * @param string $event
         * @return bool
         * @static
         */
        public static function hasDispatched($event)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            return $instance->hasDispatched($event);
        }

    }
    class File
    {
        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function exists($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->exists($path);
        }

        /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function missing($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->missing($path);
        }

        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @param bool $lock
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         * @return string
         */
        public static function get($path, $lock = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->get($path, $lock);
        }

        /**
         * Get contents of a file with shared access.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function sharedGet($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->sharedGet($path);
        }

        /**
         * Get the returned value of a file.
         *
         * @param string $path
         * @param array $data
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         * @return mixed
         */
        public static function getRequire($path, $data = [])
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->getRequire($path, $data);
        }

        /**
         * Require the given file once.
         *
         * @param string $path
         * @param array $data
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         * @return mixed
         */
        public static function requireOnce($path, $data = [])
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->requireOnce($path, $data);
        }

        /**
         * Get the contents of a file one line at a time.
         *
         * @param string $path
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         * @return \Illuminate\Support\LazyCollection
         */
        public static function lines($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->lines($path);
        }

        /**
         * Get the hash of the file at the given path.
         *
         * @param string $path
         * @param string $algorithm
         * @return string
         * @static
         */
        public static function hash($path, $algorithm = 'md5')
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->hash($path, $algorithm);
        }

        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string $contents
         * @param bool $lock
         * @return int|bool
         * @static
         */
        public static function put($path, $contents, $lock = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->put($path, $contents, $lock);
        }

        /**
         * Write the contents of a file, replacing it atomically if it already exists.
         *
         * @param string $path
         * @param string $content
         * @return void
         * @static
         */
        public static function replace($path, $content)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->replace($path, $content);
        }

        /**
         * Replace a given string within a given file.
         *
         * @param array|string $search
         * @param array|string $replace
         * @param string $path
         * @return void
         * @static
         */
        public static function replaceInFile($search, $replace, $path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->replaceInFile($search, $replace, $path);
        }

        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @return int
         * @static
         */
        public static function prepend($path, $data)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->prepend($path, $data);
        }

        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @return int
         * @static
         */
        public static function append($path, $data)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->append($path, $data);
        }

        /**
         * Get or set UNIX mode of a file or directory.
         *
         * @param string $path
         * @param int|null $mode
         * @return mixed
         * @static
         */
        public static function chmod($path, $mode = null)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->chmod($path, $mode);
        }

        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool
         * @static
         */
        public static function delete($paths)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->delete($paths);
        }

        /**
         * Move a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool
         * @static
         */
        public static function move($path, $target)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->move($path, $target);
        }

        /**
         * Copy a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool
         * @static
         */
        public static function copy($path, $target)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->copy($path, $target);
        }

        /**
         * Create a symlink to the target file or directory. On Windows, a hard link is created if the target is a file.
         *
         * @param string $target
         * @param string $link
         * @return void
         * @static
         */
        public static function link($target, $link)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->link($target, $link);
        }

        /**
         * Create a relative symlink to the target file or directory.
         *
         * @param string $target
         * @param string $link
         * @throws \RuntimeException
         * @static
         * @return void
         */
        public static function relativeLink($target, $link)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->relativeLink($target, $link);
        }

        /**
         * Extract the file name from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function name($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->name($path);
        }

        /**
         * Extract the trailing name component from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function basename($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->basename($path);
        }

        /**
         * Extract the parent directory from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function dirname($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->dirname($path);
        }

        /**
         * Extract the file extension from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function extension($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->extension($path);
        }

        /**
         * Guess the file extension from the mime-type of a given file.
         *
         * @param string $path
         * @throws \RuntimeException
         * @static
         * @return string|null
         */
        public static function guessExtension($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->guessExtension($path);
        }

        /**
         * Get the file type of a given file.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function type($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->type($path);
        }

        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false
         * @static
         */
        public static function mimeType($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->mimeType($path);
        }

        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function size($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->size($path);
        }

        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function lastModified($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->lastModified($path);
        }

        /**
         * Determine if the given path is a directory.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function isDirectory($directory)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isDirectory($directory);
        }

        /**
         * Determine if the given path is a directory that does not contain any other files or directories.
         *
         * @param string $directory
         * @param bool $ignoreDotFiles
         * @return bool
         * @static
         */
        public static function isEmptyDirectory($directory, $ignoreDotFiles = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isEmptyDirectory($directory, $ignoreDotFiles);
        }

        /**
         * Determine if the given path is readable.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function isReadable($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isReadable($path);
        }

        /**
         * Determine if the given path is writable.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function isWritable($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isWritable($path);
        }

        /**
         * Determine if two files are the same by comparing their hashes.
         *
         * @param string $firstFile
         * @param string $secondFile
         * @return bool
         * @static
         */
        public static function hasSameHash($firstFile, $secondFile)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->hasSameHash($firstFile, $secondFile);
        }

        /**
         * Determine if the given path is a file.
         *
         * @param string $file
         * @return bool
         * @static
         */
        public static function isFile($file)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isFile($file);
        }

        /**
         * Find path names matching a given pattern.
         *
         * @param string $pattern
         * @param int $flags
         * @return array
         * @static
         */
        public static function glob($pattern, $flags = 0)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->glob($pattern, $flags);
        }

        /**
         * Get an array of all files in a directory.
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */
        public static function files($directory, $hidden = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->files($directory, $hidden);
        }

        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */
        public static function allFiles($directory, $hidden = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->allFiles($directory, $hidden);
        }

        /**
         * Get all of the directories within a given directory.
         *
         * @param string $directory
         * @return array
         * @static
         */
        public static function directories($directory)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->directories($directory);
        }

        /**
         * Ensure a directory exists.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @return void
         * @static
         */
        public static function ensureDirectoryExists($path, $mode = 493, $recursive = true)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->ensureDirectoryExists($path, $mode, $recursive);
        }

        /**
         * Create a directory.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @param bool $force
         * @return bool
         * @static
         */
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->makeDirectory($path, $mode, $recursive, $force);
        }

        /**
         * Move a directory.
         *
         * @param string $from
         * @param string $to
         * @param bool $overwrite
         * @return bool
         * @static
         */
        public static function moveDirectory($from, $to, $overwrite = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->moveDirectory($from, $to, $overwrite);
        }

        /**
         * Copy a directory from one location to another.
         *
         * @param string $directory
         * @param string $destination
         * @param int|null $options
         * @return bool
         * @static
         */
        public static function copyDirectory($directory, $destination, $options = null)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->copyDirectory($directory, $destination, $options);
        }

        /**
         * Recursively delete a directory.
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool $preserve
         * @return bool
         * @static
         */
        public static function deleteDirectory($directory, $preserve = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->deleteDirectory($directory, $preserve);
        }

        /**
         * Remove all of the directories within a given directory.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function deleteDirectories($directory)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->deleteDirectories($directory);
        }

        /**
         * Empty the specified directory of all files and folders.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function cleanDirectory($directory)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->cleanDirectory($directory);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param \Illuminate\Filesystem\(\Closure($this):  TWhenParameter)|TWhenParameter|null $value
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $default
         * @return $this|\Illuminate\Filesystem\TWhenReturnType
         * @static
         */
        public static function when($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->when($value, $callback, $default);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param \Illuminate\Filesystem\(\Closure($this):  TUnlessParameter)|TUnlessParameter|null  $value
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $default
         * @return $this|\Illuminate\Filesystem\TUnlessReturnType
         * @static
         */
        public static function unless($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->unless($value, $callback, $default);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Filesystem\Filesystem::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @throws \ReflectionException
         * @static
         * @return void
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Filesystem\Filesystem::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Filesystem\Filesystem::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Filesystem\Filesystem::flushMacros();
        }

    }
    class Schema {
        /**
         * Create a database in the schema.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function createDatabase($name)
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->createDatabase($name);
        }
        /**
         * Drop a database from the schema if the database exists.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function dropDatabaseIfExists($name)
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->dropDatabaseIfExists($name);
        }
        /**
         * Determine if the given table exists.
         *
         * @param string $table
         * @return bool
         * @static
         */
        public static function hasTable($table)
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->hasTable($table);
        }
        /**
         * Get the column listing for a given table.
         *
         * @param string $table
         * @return array
         * @static
         */
        public static function getColumnListing($table)
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getColumnListing($table);
        }
        /**
         * Drop all tables from the database.
         *
         * @return void
         * @static
         */
        public static function dropAllTables()
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropAllTables();
        }
        /**
         * Drop all views from the database.
         *
         * @return void
         * @static
         */
        public static function dropAllViews()
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropAllViews();
        }
        /**
         * Get all of the table names for the database.
         *
         * @return array
         * @static
         */
        public static function getAllTables()
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getAllTables();
        }
        /**
         * Get all of the view names for the database.
         *
         * @return array
         * @static
         */
        public static function getAllViews()
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getAllViews();
        }
        /**
         * Set the default string length for migrations.
         *
         * @param int $length
         * @return void
         * @static
         */
        public static function defaultStringLength($length)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\MySqlBuilder::defaultStringLength($length);
        }
        /**
         * Set the default morph key type for migrations.
         *
         * @param string $type
         * @return void
         * @throws \InvalidArgumentException
         * @static
         */
        public static function defaultMorphKeyType($type)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\MySqlBuilder::defaultMorphKeyType($type);
        }
        /**
         * Set the default morph key type for migrations to UUIDs.
         *
         * @return void
         * @static
         */
        public static function morphUsingUuids()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\MySqlBuilder::morphUsingUuids();
        }
        /**
         * Set the default morph key type for migrations to ULIDs.
         *
         * @return void
         * @static
         */
        public static function morphUsingUlids()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\MySqlBuilder::morphUsingUlids();
        }
        /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @return bool
         * @static
         */
        public static function hasColumn($table, $column)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->hasColumn($table, $column);
        }
        /**
         * Determine if the given table has given columns.
         *
         * @param string $table
         * @param array $columns
         * @return bool
         * @static
         */
        public static function hasColumns($table, $columns)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->hasColumns($table, $columns);
        }
        /**
         * Execute a table builder callback if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function whenTableHasColumn($table, $column, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->whenTableHasColumn($table, $column, $callback);
        }
        /**
         * Execute a table builder callback if the given table doesn't have a given column.
         *
         * @param string $table
         * @param string $column
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function whenTableDoesntHaveColumn($table, $column, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->whenTableDoesntHaveColumn($table, $column, $callback);
        }
        /**
         * Get the data type for the given column name.
         *
         * @param string $table
         * @param string $column
         * @return string
         * @static
         */
        public static function getColumnType($table, $column)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getColumnType($table, $column);
        }
        /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function table($table, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->table($table, $callback);
        }
        /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function create($table, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->create($table, $callback);
        }
        /**
         * Drop a table from the schema.
         *
         * @param string $table
         * @return void
         * @static
         */
        public static function drop($table)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->drop($table);
        }
        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         * @return void
         * @static
         */
        public static function dropIfExists($table)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropIfExists($table);
        }
        /**
         * Drop columns from a table schema.
         *
         * @param string $table
         * @param string|array $columns
         * @return void
         * @static
         */
        public static function dropColumns($table, $columns)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropColumns($table, $columns);
        }
        /**
         * Drop all types from the database.
         *
         * @return void
         * @throws \LogicException
         * @static
         */
        public static function dropAllTypes()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropAllTypes();
        }
        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         * @return void
         * @static
         */
        public static function rename($from, $to)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->rename($from, $to);
        }
        /**
         * Enable foreign key constraints.
         *
         * @return bool
         * @static
         */
        public static function enableForeignKeyConstraints()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->enableForeignKeyConstraints();
        }
        /**
         * Disable foreign key constraints.
         *
         * @return bool
         * @static
         */
        public static function disableForeignKeyConstraints()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->disableForeignKeyConstraints();
        }
        /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static function getConnection()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getConnection();
        }
        /**
         * Set the database connection instance.
         *
         * @param \Illuminate\Database\Connection $connection
         * @return \Illuminate\Database\Schema\MySqlBuilder
         * @static
         */
        public static function setConnection($connection)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->setConnection($connection);
        }
        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param \Closure $resolver
         * @return void
         * @static
         */
        public static function blueprintResolver($resolver)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->blueprintResolver($resolver);
        }

    }
    class Storage {
        /**
         * Get a filesystem instance.
         *
         * @param string|null $name
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function drive($name = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->drive($name);
        }
        /**
         * Get a filesystem instance.
         *
         * @param string|null $name
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function disk($name = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->disk($name);
        }
        /**
         * Get a default cloud filesystem instance.
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function cloud()
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->cloud();
        }
        /**
         * Build an on-demand disk.
         *
         * @param string|array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function build($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->build($config);
        }
        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function createLocalDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createLocalDriver($config);
        }
        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function createFtpDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createFtpDriver($config);
        }
        /**
         * Create an instance of the sftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function createSftpDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createSftpDriver($config);
        }
        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud
         * @static
         */
        public static function createS3Driver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createS3Driver($config);
        }
        /**
         * Create a scoped driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function createScopedDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createScopedDriver($config);
        }
        /**
         * Set the given disk instance.
         *
         * @param string $name
         * @param mixed $disk
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function set($name, $disk)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->set($name, $disk);
        }
        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->getDefaultDriver();
        }
        /**
         * Get the default cloud driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultCloudDriver()
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->getDefaultCloudDriver();
        }
        /**
         * Unset the given disk instances.
         *
         * @param array|string $disk
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function forgetDisk($disk)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->forgetDisk($disk);
        }
        /**
         * Disconnect the given disk and remove from local cache.
         *
         * @param string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            $instance->purge($name);
        }
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->extend($driver, $callback);
        }
        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->setApplication($app);
        }
        /**
         * Assert that the given file or directory exists.
         *
         * @param string|array $path
         * @param string|null $content
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function assertExists($path, $content = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->assertExists($path, $content);
        }
        /**
         * Assert that the given file or directory does not exist.
         *
         * @param string|array $path
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function assertMissing($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->assertMissing($path);
        }
        /**
         * Assert that the given directory is empty.
         *
         * @param string $path
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function assertDirectoryEmpty($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->assertDirectoryEmpty($path);
        }
        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function exists($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->exists($path);
        }
        /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function missing($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->missing($path);
        }
        /**
         * Determine if a file exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function fileExists($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->fileExists($path);
        }
        /**
         * Determine if a file is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function fileMissing($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->fileMissing($path);
        }
        /**
         * Determine if a directory exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function directoryExists($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->directoryExists($path);
        }
        /**
         * Determine if a directory is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function directoryMissing($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->directoryMissing($path);
        }
        /**
         * Get the full path for the file at the given "short" path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function path($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->path($path);
        }
        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @return string|null
         * @static
         */
        public static function get($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->get($path);
        }
        /**
         * Create a streamed response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static function response($path, $name = null, $headers = [], $disposition = 'inline')
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->response($path, $name, $headers, $disposition);
        }
        /**
         * Create a streamed download response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static function download($path, $name = null, $headers = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->download($path, $name, $headers);
        }
        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param \Psr\Http\Message\StreamInterface|\Illuminate\Http\File|\Illuminate\Http\UploadedFile|string|resource $contents
         * @param mixed $options
         * @return string|bool
         * @static
         */
        public static function put($path, $contents, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->put($path, $contents, $options);
        }
        /**
         * Store the uploaded file on the disk.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $file
         * @param mixed $options
         * @return string|false
         * @static
         */
        public static function putFile($path, $file, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->putFile($path, $file, $options);
        }
        /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $file
         * @param string $name
         * @param mixed $options
         * @return string|false
         * @static
         */
        public static function putFileAs($path, $file, $name, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->putFileAs($path, $file, $name, $options);
        }
        /**
         * Get the visibility for the given path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function getVisibility($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getVisibility($path);
        }
        /**
         * Set the visibility for the given path.
         *
         * @param string $path
         * @param string $visibility
         * @return bool
         * @static
         */
        public static function setVisibility($path, $visibility)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->setVisibility($path, $visibility);
        }
        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool
         * @static
         */
        public static function prepend($path, $data, $separator = '
')
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->prepend($path, $data, $separator);
        }
        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool
         * @static
         */
        public static function append($path, $data, $separator = '
')
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->append($path, $data, $separator);
        }
        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool
         * @static
         */
        public static function delete($paths)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->delete($paths);
        }
        /**
         * Copy a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool
         * @static
         */
        public static function copy($from, $to)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->copy($from, $to);
        }
        /**
         * Move a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool
         * @static
         */
        public static function move($from, $to)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->move($from, $to);
        }
        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function size($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->size($path);
        }
        /**
         * Get the checksum for a file.
         *
         * @return string|false
         * @throws UnableToProvideChecksum
         * @static
         */
        public static function checksum($path, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->checksum($path, $options);
        }
        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false
         * @static
         */
        public static function mimeType($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->mimeType($path);
        }
        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function lastModified($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->lastModified($path);
        }
        /**
         * Get a resource to read the file.
         *
         * @param string $path
         * @return resource|null The path resource or null on failure.
         * @static
         */
        public static function readStream($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->readStream($path);
        }
        /**
         * Write a new file using a stream.
         *
         * @param string $path
         * @param resource $resource
         * @param array $options
         * @return bool
         * @static
         */
        public static function writeStream($path, $resource, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->writeStream($path, $resource, $options);
        }
        /**
         * Get the URL for the file at the given path.
         *
         * @param string $path
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static function url($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->url($path);
        }
        /**
         * Determine if temporary URLs can be generated.
         *
         * @return bool
         * @static
         */
        public static function providesTemporaryUrls()
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->providesTemporaryUrls();
        }
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static function temporaryUrl($path, $expiration, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->temporaryUrl($path, $expiration, $options);
        }
        /**
         * Get an array of all files in a directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array
         * @static
         */
        public static function files($directory = null, $recursive = false)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->files($directory, $recursive);
        }
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string|null $directory
         * @return array
         * @static
         */
        public static function allFiles($directory = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->allFiles($directory);
        }
        /**
         * Get all of the directories within a given directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array
         * @static
         */
        public static function directories($directory = null, $recursive = false)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->directories($directory, $recursive);
        }
        /**
         * Get all the directories within a given directory (recursive).
         *
         * @param string|null $directory
         * @return array
         * @static
         */
        public static function allDirectories($directory = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->allDirectories($directory);
        }
        /**
         * Create a directory.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function makeDirectory($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->makeDirectory($path);
        }
        /**
         * Recursively delete a directory.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function deleteDirectory($directory)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->deleteDirectory($directory);
        }
        /**
         * Get the Flysystem driver.
         *
         * @return \League\Flysystem\FilesystemOperator
         * @static
         */
        public static function getDriver()
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getDriver();
        }
        /**
         * Get the Flysystem adapter.
         *
         * @return \League\Flysystem\FilesystemAdapter
         * @static
         */
        public static function getAdapter()
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getAdapter();
        }
        /**
         * Get the configuration values.
         *
         * @return array
         * @static
         */
        public static function getConfig()
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getConfig();
        }
        /**
         * Define a custom temporary URL builder callback.
         *
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function buildTemporaryUrlsUsing($callback)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            $instance->buildTemporaryUrlsUsing($callback);
        }
        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param \Illuminate\Filesystem\(\Closure($this):  TWhenParameter)|TWhenParameter|null $value
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $default
         * @return $this|\Illuminate\Filesystem\TWhenReturnType
         * @static
         */
        public static function when($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->when($value, $callback, $default);
        }
        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param \Illuminate\Filesystem\(\Closure($this):  TUnlessParameter)|TUnlessParameter|null  $value
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $default
         * @return $this|\Illuminate\Filesystem\TUnlessReturnType
         * @static
         */
        public static function unless($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->unless($value, $callback, $default);
        }
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Filesystem\FilesystemAdapter::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Filesystem\FilesystemAdapter::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Filesystem\FilesystemAdapter::flushMacros();
        }
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->macroCall($method, $parameters);
        }

    }
}

namespace Illuminate\Database\Eloquent\Relations {
    class BelongsToMany
    {

    }
    class Relation
    {
        /**
         * @see \Laravel\Nova\Query\Mixin\BelongsToMany::getDefaultPivotAttributes()
         * @static
         */
        public static function getDefaultPivotAttributes()
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::getDefaultPivotAttributes();
        }

        /**
         * @param mixed $query
         * @static
         * @see \Laravel\Nova\Query\Mixin\BelongsToMany::applyDefaultPivotQuery()
         */
        public static function applyDefaultPivotQuery($query)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::applyDefaultPivotQuery($query);
        }

    }
    class HasMany
    {

    }
    class HasOneOrMany
    {

    }
    class BelongsTo
    {

    }
    class MorphMany
    {

    }
    class MorphOneOrMany
    {

    }
}

namespace Illuminate\Support {
    class Arr {

    }
    class Js {

    }
    class Str {

    }
    class Collection {
        /**
         *
         *
         * @see \Laravel\Nova\NovaServiceProvider::registerCollectionMacros()
         * @static
         */
        public static function isAssoc()
        {
            return \Illuminate\Support\Collection::isAssoc();
        }

    }
}

namespace {
    class DB extends \Illuminate\Support\Facades\DB
    {
    }
    class Config extends \Illuminate\Support\Facades\Config{}
    class Eloquent extends \Illuminate\Database\Eloquent\Model {
        /**
         * Create and return an un-saved model instance.
         *
         * @param array $attributes
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static function make($attributes = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->make($attributes);
        }

        /**
         * Register a new global scope.
         *
         * @param string $identifier
         * @param \Illuminate\Database\Eloquent\Scope|\Closure $scope
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withGlobalScope($identifier, $scope)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withGlobalScope($identifier, $scope);
        }

        /**
         * Remove a registered global scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withoutGlobalScope($scope)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutGlobalScope($scope);
        }

        /**
         * Remove all or passed registered global scopes.
         *
         * @param array|null $scopes
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withoutGlobalScopes($scopes = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutGlobalScopes($scopes);
        }

        /**
         * Get an array of global scopes that were removed from the query.
         *
         * @return array
         * @static
         */
        public static function removedScopes()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->removedScopes();
        }

        /**
         * Add a where clause on the primary key to the query.
         *
         * @param mixed $id
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereKey($id)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereKey($id);
        }

        /**
         * Add a where clause on the primary key to the query.
         *
         * @param mixed $id
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereKeyNot($id)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereKeyNot($id);
        }

        /**
         * Add a basic where clause to the query.
         *
         * @param \Closure|string|array|\Illuminate\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @param string $boolean
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function where($column, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->where($column, $operator, $value, $boolean);
        }

        /**
         * Add a basic where clause to the query, and return the first result.
         *
         * @param \Closure|string|array|\Illuminate\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @param string $boolean
         * @return \Illuminate\Database\Eloquent\Model|static|null
         * @static
         */
        public static function firstWhere($column, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstWhere($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where" clause to the query.
         *
         * @param \Closure|array|string|\Illuminate\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhere($column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhere($column, $operator, $value);
        }

        /**
         * Add a basic "where not" clause to the query.
         *
         * @param \Closure|string|array|\Illuminate\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @param string $boolean
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereNot($column, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereNot($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where not" clause to the query.
         *
         * @param \Closure|array|string|\Illuminate\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereNot($column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereNot($column, $operator, $value);
        }

        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string|\Illuminate\Database\Query\Expression $column
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function latest($column = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->latest($column);
        }

        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string|\Illuminate\Database\Query\Expression $column
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function oldest($column = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->oldest($column);
        }

        /**
         * Create a collection of models from plain arrays.
         *
         * @param array $items
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static function hydrate($items)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->hydrate($items);
        }

        /**
         * Create a collection of models from a raw query.
         *
         * @param string $query
         * @param array $bindings
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static function fromQuery($query, $bindings = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->fromQuery($query, $bindings);
        }

        /**
         * Find a model by its primary key.
         *
         * @param mixed $id
         * @param array|string $columns
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
         * @static
         */
        public static function find($id, $columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->find($id, $columns);
        }

        /**
         * Find multiple models by their primary keys.
         *
         * @param \Illuminate\Contracts\Support\Arrayable|array $ids
         * @param array|string $columns
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static function findMany($ids, $columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findMany($ids, $columns);
        }

        /**
         * Find a model by its primary key or throw an exception.
         *
         * @param mixed $id
         * @param array|string $columns
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|static[]
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @static
         */
        public static function findOrFail($id, $columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findOrFail($id, $columns);
        }

        /**
         * Find a model by its primary key or return fresh model instance.
         *
         * @param mixed $id
         * @param array|string $columns
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static function findOrNew($id, $columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findOrNew($id, $columns);
        }

        /**
         * Find a model by its primary key or call a callback.
         *
         * @param mixed $id
         * @param \Closure|array|string $columns
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|mixed
         * @static
         */
        public static function findOr($id, $columns = [], $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findOr($id, $columns, $callback);
        }

        /**
         * Get the first record matching the attributes or instantiate it.
         *
         * @param array $attributes
         * @param array $values
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static function firstOrNew($attributes = [], $values = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOrNew($attributes, $values);
        }

        /**
         * Get the first record matching the attributes or create it.
         *
         * @param array $attributes
         * @param array $values
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static function firstOrCreate($attributes = [], $values = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOrCreate($attributes, $values);
        }

        /**
         * Create or update a record matching the attributes, and fill it with values.
         *
         * @param array $attributes
         * @param array $values
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static function updateOrCreate($attributes, $values = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->updateOrCreate($attributes, $values);
        }

        /**
         * Execute the query and get the first result or throw an exception.
         *
         * @param array|string $columns
         * @return \Illuminate\Database\Eloquent\Model|static
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @static
         */
        public static function firstOrFail($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOrFail($columns);
        }

        /**
         * Execute the query and get the first result or call a callback.
         *
         * @param \Closure|array|string $columns
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Model|static|mixed
         * @static
         */
        public static function firstOr($columns = [], $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOr($columns, $callback);
        }

        /**
         * Execute the query and get the first result if it's the sole matching record.
         *
         * @param array|string $columns
         * @return \Illuminate\Database\Eloquent\Model
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @throws \Illuminate\Database\MultipleRecordsFoundException
         * @static
         */
        public static function sole($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->sole($columns);
        }

        /**
         * Get a single column's value from the first result of a query.
         *
         * @param string|\Illuminate\Database\Query\Expression $column
         * @return mixed
         * @static
         */
        public static function value($column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->value($column);
        }

        /**
         * Get a single column's value from the first result of a query if it's the sole matching record.
         *
         * @param string|\Illuminate\Database\Query\Expression $column
         * @return mixed
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @throws \Illuminate\Database\MultipleRecordsFoundException
         * @static
         */
        public static function soleValue($column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->soleValue($column);
        }

        /**
         * Get a single column's value from the first result of the query or throw an exception.
         *
         * @param string|\Illuminate\Database\Query\Expression $column
         * @return mixed
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @static
         */
        public static function valueOrFail($column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->valueOrFail($column);
        }

        /**
         * Execute the query as a "select" statement.
         *
         * @param array|string $columns
         * @return \Illuminate\Database\Eloquent\Collection|static[]
         * @static
         */
        public static function get($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->get($columns);
        }

        /**
         * Get the hydrated models without eager loading.
         *
         * @param array|string $columns
         * @return \Illuminate\Database\Eloquent\Model[]|static[]
         * @static
         */
        public static function getModels($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getModels($columns);
        }

        /**
         * Eager load the relationships for the models.
         *
         * @param array $models
         * @return array
         * @static
         */
        public static function eagerLoadRelations($models)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->eagerLoadRelations($models);
        }

        /**
         * Get a lazy collection for the given query.
         *
         * @return \Illuminate\Support\LazyCollection
         * @static
         */
        public static function cursor()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->cursor();
        }

        /**
         * Get an array with the values of a given column.
         *
         * @param string|\Illuminate\Database\Query\Expression $column
         * @param string|null $key
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function pluck($column, $key = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->pluck($column, $key);
        }

        /**
         * Paginate the given query.
         *
         * @param int|null|\Closure $perPage
         * @param array|string $columns
         * @param string $pageName
         * @param int|null $page
         * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
         * @throws \InvalidArgumentException
         * @static
         */
        public static function paginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->paginate($perPage, $columns, $pageName, $page);
        }

        /**
         * Paginate the given query into a simple paginator.
         *
         * @param int|null $perPage
         * @param array|string $columns
         * @param string $pageName
         * @param int|null $page
         * @return \Illuminate\Contracts\Pagination\Paginator
         * @static
         */
        public static function simplePaginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->simplePaginate($perPage, $columns, $pageName, $page);
        }

        /**
         * Paginate the given query into a cursor paginator.
         *
         * @param int|null $perPage
         * @param array|string $columns
         * @param string $cursorName
         * @param \Illuminate\Pagination\Cursor|string|null $cursor
         * @return \Illuminate\Contracts\Pagination\CursorPaginator
         * @static
         */
        public static function cursorPaginate($perPage = null, $columns = [], $cursorName = 'cursor', $cursor = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->cursorPaginate($perPage, $columns, $cursorName, $cursor);
        }

        /**
         * Save a new model and return the instance.
         *
         * @param array $attributes
         * @return \Illuminate\Database\Eloquent\Model|$this
         * @static
         */
        public static function create($attributes = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->create($attributes);
        }

        /**
         * Save a new model and return the instance. Allow mass-assignment.
         *
         * @param array $attributes
         * @return \Illuminate\Database\Eloquent\Model|$this
         * @static
         */
        public static function forceCreate($attributes)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->forceCreate($attributes);
        }

        /**
         * Insert new records or update the existing ones.
         *
         * @param array $values
         * @param array|string $uniqueBy
         * @param array|null $update
         * @return int
         * @static
         */
        public static function upsert($values, $uniqueBy, $update = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->upsert($values, $uniqueBy, $update);
        }

        /**
         * Register a replacement for the default delete function.
         *
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function onDelete($callback)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            $instance->onDelete($callback);
        }

        /**
         * Call the given local model scopes.
         *
         * @param array|string $scopes
         * @return static|mixed
         * @static
         */
        public static function scopes($scopes)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->scopes($scopes);
        }

        /**
         * Apply the scopes to the Eloquent builder instance and return it.
         *
         * @return static
         * @static
         */
        public static function applyScopes()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->applyScopes();
        }

        /**
         * Prevent the specified relations from being eager loaded.
         *
         * @param mixed $relations
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function without($relations)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->without($relations);
        }

        /**
         * Set the relationships that should be eager loaded while removing any previously added eager loading specifications.
         *
         * @param mixed $relations
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withOnly($relations)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withOnly($relations);
        }

        /**
         * Create a new instance of the model being queried.
         *
         * @param array $attributes
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static function newModelInstance($attributes = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->newModelInstance($attributes);
        }

        /**
         * Apply query-time casts to the model instance.
         *
         * @param array $casts
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withCasts($casts)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withCasts($casts);
        }

        /**
         * Get the underlying query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function getQuery()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getQuery();
        }

        /**
         * Set the underlying query builder instance.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function setQuery($query)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->setQuery($query);
        }

        /**
         * Get a base query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function toBase()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->toBase();
        }

        /**
         * Get the relationships being eagerly loaded.
         *
         * @return array
         * @static
         */
        public static function getEagerLoads()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getEagerLoads();
        }

        /**
         * Set the relationships being eagerly loaded.
         *
         * @param array $eagerLoad
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function setEagerLoads($eagerLoad)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->setEagerLoads($eagerLoad);
        }

        /**
         * Indicate that the given relationships should not be eagerly loaded.
         *
         * @param array $relations
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withoutEagerLoad($relations)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutEagerLoad($relations);
        }

        /**
         * Flush the relationships being eagerly loaded.
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withoutEagerLoads()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutEagerLoads();
        }

        /**
         * Get the model instance being queried.
         *
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static function getModel()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getModel();
        }

        /**
         * Set a model instance for the model being queried.
         *
         * @param \Illuminate\Database\Eloquent\Model $model
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function setModel($model)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->setModel($model);
        }

        /**
         * Get the given macro by name.
         *
         * @param string $name
         * @return \Closure
         * @static
         */
        public static function getMacro($name)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getMacro($name);
        }

        /**
         * Checks if a macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->hasMacro($name);
        }

        /**
         * Get the given global macro by name.
         *
         * @param string $name
         * @return \Closure
         * @static
         */
        public static function getGlobalMacro($name)
        {
            return \Illuminate\Database\Eloquent\Builder::getGlobalMacro($name);
        }

        /**
         * Checks if a global macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasGlobalMacro($name)
        {
            return \Illuminate\Database\Eloquent\Builder::hasGlobalMacro($name);
        }

        /**
         * Clone the Eloquent query builder.
         *
         * @return static
         * @static
         */
        public static function clone()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->clone();
        }

        /**
         * Chunk the results of the query.
         *
         * @param int $count
         * @param callable $callback
         * @return bool
         * @static
         */
        public static function chunk($count, $callback)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->chunk($count, $callback);
        }

        /**
         * Run a map over each item while chunking.
         *
         * @param callable $callback
         * @param int $count
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function chunkMap($callback, $count = 1000)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->chunkMap($callback, $count);
        }

        /**
         * Execute a callback over each item while chunking.
         *
         * @param callable $callback
         * @param int $count
         * @return bool
         * @throws \RuntimeException
         * @static
         */
        public static function each($callback, $count = 1000)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->each($callback, $count);
        }

        /**
         * Chunk the results of a query by comparing IDs.
         *
         * @param int $count
         * @param callable $callback
         * @param string|null $column
         * @param string|null $alias
         * @return bool
         * @static
         */
        public static function chunkById($count, $callback, $column = null, $alias = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->chunkById($count, $callback, $column, $alias);
        }

        /**
         * Execute a callback over each item while chunking by ID.
         *
         * @param callable $callback
         * @param int $count
         * @param string|null $column
         * @param string|null $alias
         * @return bool
         * @static
         */
        public static function eachById($callback, $count = 1000, $column = null, $alias = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->eachById($callback, $count, $column, $alias);
        }

        /**
         * Query lazily, by chunks of the given size.
         *
         * @param int $chunkSize
         * @return \Illuminate\Support\LazyCollection
         * @throws \InvalidArgumentException
         * @static
         */
        public static function lazy($chunkSize = 1000)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->lazy($chunkSize);
        }

        /**
         * Query lazily, by chunking the results of a query by comparing IDs.
         *
         * @param int $chunkSize
         * @param string|null $column
         * @param string|null $alias
         * @return \Illuminate\Support\LazyCollection
         * @throws \InvalidArgumentException
         * @static
         */
        public static function lazyById($chunkSize = 1000, $column = null, $alias = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->lazyById($chunkSize, $column, $alias);
        }

        /**
         * Query lazily, by chunking the results of a query by comparing IDs in descending order.
         *
         * @param int $chunkSize
         * @param string|null $column
         * @param string|null $alias
         * @return \Illuminate\Support\LazyCollection
         * @throws \InvalidArgumentException
         * @static
         */
        public static function lazyByIdDesc($chunkSize = 1000, $column = null, $alias = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->lazyByIdDesc($chunkSize, $column, $alias);
        }

        /**
         * Execute the query and get the first result.
         *
         * @param array|string $columns
         * @return \Illuminate\Database\Eloquent\Model|object|static|null
         * @static
         */
        public static function first($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->first($columns);
        }

        /**
         * Execute the query and get the first result if it's the sole matching record.
         *
         * @param array|string $columns
         * @return \Illuminate\Database\Eloquent\Model|object|static|null
         * @throws \Illuminate\Database\RecordsNotFoundException
         * @throws \Illuminate\Database\MultipleRecordsFoundException
         * @static
         */
        public static function baseSole($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->baseSole($columns);
        }

        /**
         * Pass the query to a given callback.
         *
         * @param callable $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function tap($callback)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->tap($callback);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param \Illuminate\Database\Eloquent\(\Closure($this):  TWhenParameter)|TWhenParameter|null $value
         * @param \Illuminate\Database\Eloquent\(callable($this,  TWhenParameter): TWhenReturnType)|null  $callback
         * @param \Illuminate\Database\Eloquent\(callable($this,  TWhenParameter): TWhenReturnType)|null  $default
         * @return $this|\Illuminate\Database\Eloquent\TWhenReturnType
         * @static
         */
        public static function when($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->when($value, $callback, $default);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param \Illuminate\Database\Eloquent\(\Closure($this):  TUnlessParameter)|TUnlessParameter|null  $value
         * @param \Illuminate\Database\Eloquent\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $callback
         * @param \Illuminate\Database\Eloquent\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $default
         * @return $this|\Illuminate\Database\Eloquent\TUnlessReturnType
         * @static
         */
        public static function unless($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->unless($value, $callback, $default);
        }

        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param \Illuminate\Database\Eloquent\Relations\Relation|string $relation
         * @param string $operator
         * @param int $count
         * @param string $boolean
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @throws \RuntimeException
         * @static
         */
        public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->has($relation, $operator, $count, $boolean, $callback);
        }

        /**
         * Add a relationship count / exists condition to the query with an "or".
         *
         * @param string $relation
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orHas($relation, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orHas($relation, $operator, $count);
        }

        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param string $relation
         * @param string $boolean
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function doesntHave($relation, $boolean = 'and', $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->doesntHave($relation, $boolean, $callback);
        }

        /**
         * Add a relationship count / exists condition to the query with an "or".
         *
         * @param string $relation
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orDoesntHave($relation)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orDoesntHave($relation);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param string $relation
         * @param \Closure|null $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereHas($relation, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereHas($relation, $callback, $operator, $count);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * Also load the relationship with same condition.
         *
         * @param string $relation
         * @param \Closure|null $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withWhereHas($relation, $callback, $operator, $count);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param string $relation
         * @param \Closure|null $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereHas($relation, $callback, $operator, $count);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param string $relation
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereDoesntHave($relation, $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereDoesntHave($relation, $callback);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param string $relation
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereDoesntHave($relation, $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereDoesntHave($relation, $callback);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param string $operator
         * @param int $count
         * @param string $boolean
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function hasMorph($relation, $types, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->hasMorph($relation, $types, $operator, $count, $boolean, $callback);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with an "or".
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orHasMorph($relation, $types, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orHasMorph($relation, $types, $operator, $count);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param string $boolean
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function doesntHaveMorph($relation, $types, $boolean = 'and', $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->doesntHaveMorph($relation, $types, $boolean, $callback);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with an "or".
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orDoesntHaveMorph($relation, $types)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orDoesntHaveMorph($relation, $types);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with where clauses.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param \Closure|null $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereHasMorph($relation, $types, $callback, $operator, $count);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param \Closure|null $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereHasMorph($relation, $types, $callback, $operator, $count);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with where clauses.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereDoesntHaveMorph($relation, $types, $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereDoesntHaveMorph($relation, $types, $callback);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereDoesntHaveMorph($relation, $types, $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereDoesntHaveMorph($relation, $types, $callback);
        }

        /**
         * Add a basic where clause to a relationship query.
         *
         * @param string $relation
         * @param \Closure|string|array|\Illuminate\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereRelation($relation, $column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereRelation($relation, $column, $operator, $value);
        }

        /**
         * Add an "or where" clause to a relationship query.
         *
         * @param string $relation
         * @param \Closure|string|array|\Illuminate\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereRelation($relation, $column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereRelation($relation, $column, $operator, $value);
        }

        /**
         * Add a polymorphic relationship condition to the query with a where clause.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param \Closure|string|array|\Illuminate\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereMorphRelation($relation, $types, $column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereMorphRelation($relation, $types, $column, $operator, $value);
        }

        /**
         * Add a polymorphic relationship condition to the query with an "or where" clause.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param \Closure|string|array|\Illuminate\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereMorphRelation($relation, $types, $column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereMorphRelation($relation, $types, $column, $operator, $value);
        }

        /**
         * Add a morph-to relationship condition to the query.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param \Illuminate\Database\Eloquent\Model|string $model
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereMorphedTo($relation, $model, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereMorphedTo($relation, $model, $boolean);
        }

        /**
         * Add a not morph-to relationship condition to the query.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param \Illuminate\Database\Eloquent\Model|string $model
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereNotMorphedTo($relation, $model, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereNotMorphedTo($relation, $model, $boolean);
        }

        /**
         * Add a morph-to relationship condition to the query with an "or where" clause.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param \Illuminate\Database\Eloquent\Model|string $model
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereMorphedTo($relation, $model)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereMorphedTo($relation, $model);
        }

        /**
         * Add a not morph-to relationship condition to the query with an "or where" clause.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param \Illuminate\Database\Eloquent\Model|string $model
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereNotMorphedTo($relation, $model)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereNotMorphedTo($relation, $model);
        }

        /**
         * Add a "belongs to" relationship where clause to the query.
         *
         * @param \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection<\Illuminate\Database\Eloquent\Model> $related
         * @param string|null $relationshipName
         * @param string $boolean
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @throws \Illuminate\Database\Eloquent\RelationNotFoundException
         * @static
         */
        public static function whereBelongsTo($related, $relationshipName = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereBelongsTo($related, $relationshipName, $boolean);
        }

        /**
         * Add an "BelongsTo" relationship with an "or where" clause to the query.
         *
         * @param \Illuminate\Database\Eloquent\Model $related
         * @param string|null $relationshipName
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @throws \RuntimeException
         * @static
         */
        public static function orWhereBelongsTo($related, $relationshipName = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereBelongsTo($related, $relationshipName);
        }

        /**
         * Add subselect queries to include an aggregate value for a relationship.
         *
         * @param mixed $relations
         * @param string $column
         * @param string $function
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withAggregate($relations, $column, $function = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withAggregate($relations, $column, $function);
        }

        /**
         * Add subselect queries to count the relations.
         *
         * @param mixed $relations
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withCount($relations)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withCount($relations);
        }

        /**
         * Add subselect queries to include the max of the relation's column.
         *
         * @param string|array $relation
         * @param string $column
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withMax($relation, $column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withMax($relation, $column);
        }

        /**
         * Add subselect queries to include the min of the relation's column.
         *
         * @param string|array $relation
         * @param string $column
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withMin($relation, $column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withMin($relation, $column);
        }

        /**
         * Add subselect queries to include the sum of the relation's column.
         *
         * @param string|array $relation
         * @param string $column
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withSum($relation, $column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withSum($relation, $column);
        }

        /**
         * Add subselect queries to include the average of the relation's column.
         *
         * @param string|array $relation
         * @param string $column
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withAvg($relation, $column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withAvg($relation, $column);
        }

        /**
         * Add subselect queries to include the existence of related models.
         *
         * @param string|array $relation
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function withExists($relation)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withExists($relation);
        }

        /**
         * Merge the where constraints from another query to the current query.
         *
         * @param \Illuminate\Database\Eloquent\Builder $from
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function mergeConstraintsFrom($from)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->mergeConstraintsFrom($from);
        }

        /**
         * Set the columns to be selected.
         *
         * @param array|mixed $columns
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function select($columns = [])
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->select($columns);
        }

        /**
         * Add a subselect expression to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static function selectSub($query, $as)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->selectSub($query, $as);
        }

        /**
         * Add a new "raw" select expression to the query.
         *
         * @param string $expression
         * @param array $bindings
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function selectRaw($expression, $bindings = [])
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->selectRaw($expression, $bindings);
        }

        /**
         * Makes "from" fetch from a subquery.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static function fromSub($query, $as)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->fromSub($query, $as);
        }

        /**
         * Add a raw from clause to the query.
         *
         * @param string $expression
         * @param mixed $bindings
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function fromRaw($expression, $bindings = [])
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->fromRaw($expression, $bindings);
        }

        /**
         * Add a new select column to the query.
         *
         * @param array|mixed $column
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function addSelect($column)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->addSelect($column);
        }

        /**
         * Force the query to only return distinct results.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function distinct()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->distinct();
        }

        /**
         * Set the table which the query is targeting.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $table
         * @param string|null $as
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function from($table, $as = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->from($table, $as);
        }

        /**
         * Add a join clause to the query.
         *
         * @param string $table
         * @param \Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @param string $type
         * @param bool $where
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->join($table, $first, $operator, $second, $type, $where);
        }

        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param \Closure|string $first
         * @param string $operator
         * @param string $second
         * @param string $type
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function joinWhere($table, $first, $operator, $second, $type = 'inner')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->joinWhere($table, $first, $operator, $second, $type);
        }

        /**
         * Add a subquery join clause to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         * @param \Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @param string $type
         * @param bool $where
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static function joinSub($query, $as, $first, $operator = null, $second = null, $type = 'inner', $where = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->joinSub($query, $as, $first, $operator, $second, $type, $where);
        }

        /**
         * Add a left join to the query.
         *
         * @param string $table
         * @param \Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function leftJoin($table, $first, $operator = null, $second = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->leftJoin($table, $first, $operator, $second);
        }

        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param \Closure|string $first
         * @param string $operator
         * @param string $second
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function leftJoinWhere($table, $first, $operator, $second)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->leftJoinWhere($table, $first, $operator, $second);
        }

        /**
         * Add a subquery left join to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         * @param \Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function leftJoinSub($query, $as, $first, $operator = null, $second = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->leftJoinSub($query, $as, $first, $operator, $second);
        }

        /**
         * Add a right join to the query.
         *
         * @param string $table
         * @param \Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function rightJoin($table, $first, $operator = null, $second = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->rightJoin($table, $first, $operator, $second);
        }

        /**
         * Add a "right join where" clause to the query.
         *
         * @param string $table
         * @param \Closure|string $first
         * @param string $operator
         * @param string $second
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function rightJoinWhere($table, $first, $operator, $second)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->rightJoinWhere($table, $first, $operator, $second);
        }

        /**
         * Add a subquery right join to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         * @param \Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function rightJoinSub($query, $as, $first, $operator = null, $second = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->rightJoinSub($query, $as, $first, $operator, $second);
        }

        /**
         * Add a "cross join" clause to the query.
         *
         * @param string $table
         * @param \Closure|string|null $first
         * @param string|null $operator
         * @param string|null $second
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function crossJoin($table, $first = null, $operator = null, $second = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->crossJoin($table, $first, $operator, $second);
        }

        /**
         * Add a subquery cross join to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function crossJoinSub($query, $as)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->crossJoinSub($query, $as);
        }

        /**
         * Merge an array of where clauses and bindings.
         *
         * @param array $wheres
         * @param array $bindings
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function mergeWheres($wheres, $bindings)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->mergeWheres($wheres, $bindings);
        }

        /**
         * Prepare the value and operator for a where clause.
         *
         * @param string $value
         * @param string $operator
         * @param bool $useDefault
         * @return array
         * @throws \InvalidArgumentException
         * @static
         */
        public static function prepareValueAndOperator($value, $operator, $useDefault = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->prepareValueAndOperator($value, $operator, $useDefault);
        }

        /**
         * Add a "where" clause comparing two columns to the query.
         *
         * @param string|array $first
         * @param string|null $operator
         * @param string|null $second
         * @param string|null $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereColumn($first, $operator, $second, $boolean);
        }

        /**
         * Add an "or where" clause comparing two columns to the query.
         *
         * @param string|array $first
         * @param string|null $operator
         * @param string|null $second
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereColumn($first, $operator = null, $second = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereColumn($first, $operator, $second);
        }

        /**
         * Add a raw where clause to the query.
         *
         * @param string $sql
         * @param mixed $bindings
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereRaw($sql, $bindings = [], $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereRaw($sql, $bindings, $boolean);
        }

        /**
         * Add a raw or where clause to the query.
         *
         * @param string $sql
         * @param mixed $bindings
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereRaw($sql, $bindings = [])
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereRaw($sql, $bindings);
        }

        /**
         * Add a "where in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @param string $boolean
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereIn($column, $values, $boolean = 'and', $not = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereIn($column, $values, $boolean, $not);
        }

        /**
         * Add an "or where in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereIn($column, $values)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereIn($column, $values);
        }

        /**
         * Add a "where not in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereNotIn($column, $values, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNotIn($column, $values, $boolean);
        }

        /**
         * Add an "or where not in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereNotIn($column, $values)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereNotIn($column, $values);
        }

        /**
         * Add a "where in raw" clause for integer values to the query.
         *
         * @param string $column
         * @param \Illuminate\Contracts\Support\Arrayable|array $values
         * @param string $boolean
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereIntegerInRaw($column, $values, $boolean = 'and', $not = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereIntegerInRaw($column, $values, $boolean, $not);
        }

        /**
         * Add an "or where in raw" clause for integer values to the query.
         *
         * @param string $column
         * @param \Illuminate\Contracts\Support\Arrayable|array $values
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereIntegerInRaw($column, $values)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereIntegerInRaw($column, $values);
        }

        /**
         * Add a "where not in raw" clause for integer values to the query.
         *
         * @param string $column
         * @param \Illuminate\Contracts\Support\Arrayable|array $values
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereIntegerNotInRaw($column, $values, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereIntegerNotInRaw($column, $values, $boolean);
        }

        /**
         * Add an "or where not in raw" clause for integer values to the query.
         *
         * @param string $column
         * @param \Illuminate\Contracts\Support\Arrayable|array $values
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereIntegerNotInRaw($column, $values)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereIntegerNotInRaw($column, $values);
        }

        /**
         * Add a "where null" clause to the query.
         *
         * @param string|array $columns
         * @param string $boolean
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereNull($columns, $boolean = 'and', $not = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNull($columns, $boolean, $not);
        }

        /**
         * Add an "or where null" clause to the query.
         *
         * @param string|array $column
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereNull($column)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereNull($column);
        }

        /**
         * Add a "where not null" clause to the query.
         *
         * @param string|array $columns
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereNotNull($columns, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNotNull($columns, $boolean);
        }

        /**
         * Add a where between statement to the query.
         *
         * @param string|\Illuminate\Database\Query\Expression $column
         * @param \Illuminate\Database\Query\iterable $values
         * @param string $boolean
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereBetween($column, $values, $boolean = 'and', $not = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereBetween($column, $values, $boolean, $not);
        }

        /**
         * Add a where between statement using columns to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereBetweenColumns($column, $values, $boolean = 'and', $not = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereBetweenColumns($column, $values, $boolean, $not);
        }

        /**
         * Add an or where between statement to the query.
         *
         * @param string $column
         * @param \Illuminate\Database\Query\iterable $values
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereBetween($column, $values)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereBetween($column, $values);
        }

        /**
         * Add an or where between statement using columns to the query.
         *
         * @param string $column
         * @param array $values
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereBetweenColumns($column, $values)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereBetweenColumns($column, $values);
        }

        /**
         * Add a where not between statement to the query.
         *
         * @param string $column
         * @param \Illuminate\Database\Query\iterable $values
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereNotBetween($column, $values, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNotBetween($column, $values, $boolean);
        }

        /**
         * Add a where not between statement using columns to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereNotBetweenColumns($column, $values, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNotBetweenColumns($column, $values, $boolean);
        }

        /**
         * Add an or where not between statement to the query.
         *
         * @param string $column
         * @param \Illuminate\Database\Query\iterable $values
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereNotBetween($column, $values)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereNotBetween($column, $values);
        }

        /**
         * Add an or where not between statement using columns to the query.
         *
         * @param string $column
         * @param array $values
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereNotBetweenColumns($column, $values)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereNotBetweenColumns($column, $values);
        }

        /**
         * Add an "or where not null" clause to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereNotNull($column)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereNotNull($column);
        }

        /**
         * Add a "where date" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|null $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereDate($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereDate($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where date" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|null $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereDate($column, $operator, $value = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereDate($column, $operator, $value);
        }

        /**
         * Add a "where time" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|null $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereTime($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereTime($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where time" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|null $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereTime($column, $operator, $value = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereTime($column, $operator, $value);
        }

        /**
         * Add a "where day" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|int|null $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereDay($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereDay($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where day" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|int|null $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereDay($column, $operator, $value = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereDay($column, $operator, $value);
        }

        /**
         * Add a "where month" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|int|null $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereMonth($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereMonth($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where month" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|int|null $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereMonth($column, $operator, $value = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereMonth($column, $operator, $value);
        }

        /**
         * Add a "where year" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|int|null $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereYear($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereYear($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where year" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|int|null $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereYear($column, $operator, $value = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereYear($column, $operator, $value);
        }

        /**
         * Add a nested where statement to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereNested($callback, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNested($callback, $boolean);
        }

        /**
         * Create a new query instance for nested where condition.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function forNestedWhere()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->forNestedWhere();
        }

        /**
         * Add another query builder as a nested where to the query builder.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function addNestedWhereQuery($query, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->addNestedWhereQuery($query, $boolean);
        }

        /**
         * Add an exists clause to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereExists($callback, $boolean = 'and', $not = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereExists($callback, $boolean, $not);
        }

        /**
         * Add an or exists clause to the query.
         *
         * @param \Closure $callback
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereExists($callback, $not = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereExists($callback, $not);
        }

        /**
         * Add a where not exists clause to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereNotExists($callback, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNotExists($callback, $boolean);
        }

        /**
         * Add a where not exists clause to the query.
         *
         * @param \Closure $callback
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereNotExists($callback)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereNotExists($callback);
        }

        /**
         * Add an exists clause to the query.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @param string $boolean
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function addWhereExistsQuery($query, $boolean = 'and', $not = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->addWhereExistsQuery($query, $boolean, $not);
        }

        /**
         * Adds a where condition using row values.
         *
         * @param array $columns
         * @param string $operator
         * @param array $values
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static function whereRowValues($columns, $operator, $values, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereRowValues($columns, $operator, $values, $boolean);
        }

        /**
         * Adds an or where condition using row values.
         *
         * @param array $columns
         * @param string $operator
         * @param array $values
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereRowValues($columns, $operator, $values)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereRowValues($columns, $operator, $values);
        }

        /**
         * Add a "where JSON contains" clause to the query.
         *
         * @param string $column
         * @param mixed $value
         * @param string $boolean
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereJsonContains($column, $value, $boolean = 'and', $not = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereJsonContains($column, $value, $boolean, $not);
        }

        /**
         * Add an "or where JSON contains" clause to the query.
         *
         * @param string $column
         * @param mixed $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereJsonContains($column, $value)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereJsonContains($column, $value);
        }

        /**
         * Add a "where JSON not contains" clause to the query.
         *
         * @param string $column
         * @param mixed $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereJsonDoesntContain($column, $value, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereJsonDoesntContain($column, $value, $boolean);
        }

        /**
         * Add an "or where JSON not contains" clause to the query.
         *
         * @param string $column
         * @param mixed $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereJsonDoesntContain($column, $value)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereJsonDoesntContain($column, $value);
        }

        /**
         * Add a clause that determines if a JSON path exists to the query.
         *
         * @param string $column
         * @param string $boolean
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereJsonContainsKey($column, $boolean = 'and', $not = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereJsonContainsKey($column, $boolean, $not);
        }

        /**
         * Add an "or" clause that determines if a JSON path exists to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereJsonContainsKey($column)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereJsonContainsKey($column);
        }

        /**
         * Add a clause that determines if a JSON path does not exist to the query.
         *
         * @param string $column
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereJsonDoesntContainKey($column, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereJsonDoesntContainKey($column, $boolean);
        }

        /**
         * Add an "or" clause that determines if a JSON path does not exist to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereJsonDoesntContainKey($column)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereJsonDoesntContainKey($column);
        }

        /**
         * Add a "where JSON length" clause to the query.
         *
         * @param string $column
         * @param mixed $operator
         * @param mixed $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereJsonLength($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereJsonLength($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where JSON length" clause to the query.
         *
         * @param string $column
         * @param mixed $operator
         * @param mixed $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereJsonLength($column, $operator, $value = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereJsonLength($column, $operator, $value);
        }

        /**
         * Handles dynamic "where" clauses to the query.
         *
         * @param string $method
         * @param array $parameters
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function dynamicWhere($method, $parameters)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->dynamicWhere($method, $parameters);
        }

        /**
         * Add a "where fulltext" clause to the query.
         *
         * @param string|string[] $columns
         * @param string $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function whereFullText($columns, $value, $options = [], $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereFullText($columns, $value, $options, $boolean);
        }

        /**
         * Add a "or where fulltext" clause to the query.
         *
         * @param string|string[] $columns
         * @param string $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orWhereFullText($columns, $value, $options = [])
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereFullText($columns, $value, $options);
        }

        /**
         * Add a "group by" clause to the query.
         *
         * @param array|string $groups
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function groupBy(...$groups)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->groupBy(...$groups);
        }

        /**
         * Add a raw groupBy clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function groupByRaw($sql, $bindings = [])
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->groupByRaw($sql, $bindings);
        }

        /**
         * Add a "having" clause to the query.
         *
         * @param \Closure|string $column
         * @param string|int|float|null $operator
         * @param string|int|float|null $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function having($column, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->having($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or having" clause to the query.
         *
         * @param \Closure|string $column
         * @param string|int|float|null $operator
         * @param string|int|float|null $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orHaving($column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orHaving($column, $operator, $value);
        }

        /**
         * Add a nested having statement to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function havingNested($callback, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->havingNested($callback, $boolean);
        }

        /**
         * Add another query builder as a nested having to the query builder.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function addNestedHavingQuery($query, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->addNestedHavingQuery($query, $boolean);
        }

        /**
         * Add a "having null" clause to the query.
         *
         * @param string|array $columns
         * @param string $boolean
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function havingNull($columns, $boolean = 'and', $not = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->havingNull($columns, $boolean, $not);
        }

        /**
         * Add an "or having null" clause to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orHavingNull($column)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orHavingNull($column);
        }

        /**
         * Add a "having not null" clause to the query.
         *
         * @param string|array $columns
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function havingNotNull($columns, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->havingNotNull($columns, $boolean);
        }

        /**
         * Add an "or having not null" clause to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orHavingNotNull($column)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orHavingNotNull($column);
        }

        /**
         * Add a "having between " clause to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function havingBetween($column, $values, $boolean = 'and', $not = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->havingBetween($column, $values, $boolean, $not);
        }

        /**
         * Add a raw having clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function havingRaw($sql, $bindings = [], $boolean = 'and')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->havingRaw($sql, $bindings, $boolean);
        }

        /**
         * Add a raw or having clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orHavingRaw($sql, $bindings = [])
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orHavingRaw($sql, $bindings);
        }

        /**
         * Add an "order by" clause to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Expression|string $column
         * @param string $direction
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static function orderBy($column, $direction = 'asc')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orderBy($column, $direction);
        }

        /**
         * Add a descending "order by" clause to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Expression|string $column
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orderByDesc($column)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orderByDesc($column);
        }

        /**
         * Put the query's results in random order.
         *
         * @param string $seed
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function inRandomOrder($seed = '')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->inRandomOrder($seed);
        }

        /**
         * Add a raw "order by" clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function orderByRaw($sql, $bindings = [])
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orderByRaw($sql, $bindings);
        }

        /**
         * Alias to set the "offset" value of the query.
         *
         * @param int $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function skip($value)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->skip($value);
        }

        /**
         * Set the "offset" value of the query.
         *
         * @param int $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function offset($value)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->offset($value);
        }

        /**
         * Alias to set the "limit" value of the query.
         *
         * @param int $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function take($value)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->take($value);
        }

        /**
         * Set the "limit" value of the query.
         *
         * @param int $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function limit($value)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->limit($value);
        }

        /**
         * Set the limit and offset for a given page.
         *
         * @param int $page
         * @param int $perPage
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function forPage($page, $perPage = 15)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->forPage($page, $perPage);
        }

        /**
         * Constrain the query to the previous "page" of results before a given ID.
         *
         * @param int $perPage
         * @param int|null $lastId
         * @param string $column
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function forPageBeforeId($perPage = 15, $lastId = 0, $column = 'id')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->forPageBeforeId($perPage, $lastId, $column);
        }

        /**
         * Constrain the query to the next "page" of results after a given ID.
         *
         * @param int $perPage
         * @param int|null $lastId
         * @param string $column
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->forPageAfterId($perPage, $lastId, $column);
        }

        /**
         * Remove all existing orders and optionally add a new order.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Query\Expression|string|null $column
         * @param string $direction
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function reorder($column = null, $direction = 'asc')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->reorder($column, $direction);
        }

        /**
         * Add a union statement to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
         * @param bool $all
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function union($query, $all = false)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->union($query, $all);
        }

        /**
         * Add a union all statement to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function unionAll($query)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->unionAll($query);
        }

        /**
         * Lock the selected rows in the table.
         *
         * @param string|bool $value
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function lock($value = true)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->lock($value);
        }

        /**
         * Lock the selected rows in the table for updating.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function lockForUpdate()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->lockForUpdate();
        }

        /**
         * Share lock the selected rows in the table.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function sharedLock()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->sharedLock();
        }

        /**
         * Register a closure to be invoked before the query is executed.
         *
         * @param callable $callback
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function beforeQuery($callback)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->beforeQuery($callback);
        }

        /**
         * Invoke the "before query" modification callbacks.
         *
         * @return void
         * @static
         */
        public static function applyBeforeQueryCallbacks()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            $instance->applyBeforeQueryCallbacks();
        }

        /**
         * Get the SQL representation of the query.
         *
         * @return string
         * @static
         */
        public static function toSql()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->toSql();
        }

        /**
         * Get a single expression value from the first result of a query.
         *
         * @param string $expression
         * @param array $bindings
         * @return mixed
         * @static
         */
        public static function rawValue($expression, $bindings = [])
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->rawValue($expression, $bindings);
        }

        /**
         * Get the count of the total records for the paginator.
         *
         * @param array $columns
         * @return int
         * @static
         */
        public static function getCountForPagination($columns = [])
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->getCountForPagination($columns);
        }

        /**
         * Concatenate values of a given column as a string.
         *
         * @param string $column
         * @param string $glue
         * @return string
         * @static
         */
        public static function implode($column, $glue = '')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->implode($column, $glue);
        }

        /**
         * Determine if any rows exist for the current query.
         *
         * @return bool
         * @static
         */
        public static function exists()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->exists();
        }

        /**
         * Determine if no rows exist for the current query.
         *
         * @return bool
         * @static
         */
        public static function doesntExist()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->doesntExist();
        }

        /**
         * Execute the given callback if no rows exist for the current query.
         *
         * @param \Closure $callback
         * @return mixed
         * @static
         */
        public static function existsOr($callback)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->existsOr($callback);
        }

        /**
         * Execute the given callback if rows exist for the current query.
         *
         * @param \Closure $callback
         * @return mixed
         * @static
         */
        public static function doesntExistOr($callback)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->doesntExistOr($callback);
        }

        /**
         * Retrieve the "count" result of the query.
         *
         * @param string $columns
         * @return int
         * @static
         */
        public static function count($columns = '*')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->count($columns);
        }

        /**
         * Retrieve the minimum value of a given column.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function min($column)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->min($column);
        }

        /**
         * Retrieve the maximum value of a given column.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function max($column)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->max($column);
        }

        /**
         * Retrieve the sum of the values of a given column.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function sum($column)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->sum($column);
        }

        /**
         * Retrieve the average of the values of a given column.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function avg($column)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->avg($column);
        }

        /**
         * Alias for the "avg" method.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function average($column)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->average($column);
        }

        /**
         * Execute an aggregate function on the database.
         *
         * @param string $function
         * @param array $columns
         * @return mixed
         * @static
         */
        public static function aggregate($function, $columns = [])
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->aggregate($function, $columns);
        }

        /**
         * Execute a numeric aggregate function on the database.
         *
         * @param string $function
         * @param array $columns
         * @return float|int
         * @static
         */
        public static function numericAggregate($function, $columns = [])
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->numericAggregate($function, $columns);
        }

        /**
         * Insert new records into the database.
         *
         * @param array $values
         * @return bool
         * @static
         */
        public static function insert($values)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->insert($values);
        }

        /**
         * Insert new records into the database while ignoring errors.
         *
         * @param array $values
         * @return int
         * @static
         */
        public static function insertOrIgnore($values)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->insertOrIgnore($values);
        }

        /**
         * Insert a new record and get the value of the primary key.
         *
         * @param array $values
         * @param string|null $sequence
         * @return int
         * @static
         */
        public static function insertGetId($values, $sequence = null)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->insertGetId($values, $sequence);
        }

        /**
         * Insert new records into the table using a subquery.
         *
         * @param array $columns
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @return int
         * @static
         */
        public static function insertUsing($columns, $query)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->insertUsing($columns, $query);
        }

        /**
         * Update records in a PostgreSQL database using the update from syntax.
         *
         * @param array $values
         * @return int
         * @static
         */
        public static function updateFrom($values)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->updateFrom($values);
        }

        /**
         * Insert or update a record matching the attributes, and fill it with values.
         *
         * @param array $attributes
         * @param array $values
         * @return bool
         * @static
         */
        public static function updateOrInsert($attributes, $values = [])
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->updateOrInsert($attributes, $values);
        }

        /**
         * Run a truncate statement on the table.
         *
         * @return void
         * @static
         */
        public static function truncate()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            $instance->truncate();
        }

        /**
         * Create a raw database expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression
         * @static
         */
        public static function raw($value)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->raw($value);
        }

        /**
         * Get the current query value bindings in a flattened array.
         *
         * @return array
         * @static
         */
        public static function getBindings()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->getBindings();
        }

        /**
         * Get the raw array of bindings.
         *
         * @return array
         * @static
         */
        public static function getRawBindings()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->getRawBindings();
        }

        /**
         * Set the bindings on the query builder.
         *
         * @param array $bindings
         * @param string $type
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static function setBindings($bindings, $type = 'where')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->setBindings($bindings, $type);
        }

        /**
         * Add a binding to the query.
         *
         * @param mixed $value
         * @param string $type
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static function addBinding($value, $type = 'where')
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->addBinding($value, $type);
        }

        /**
         * Cast the given binding value.
         *
         * @param mixed $value
         * @return mixed
         * @static
         */
        public static function castBinding($value)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->castBinding($value);
        }

        /**
         * Merge an array of bindings into our bindings.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function mergeBindings($query)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->mergeBindings($query);
        }

        /**
         * Remove all of the expressions from a list of bindings.
         *
         * @param array $bindings
         * @return array
         * @static
         */
        public static function cleanBindings($bindings)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->cleanBindings($bindings);
        }

        /**
         * Get the database query processor instance.
         *
         * @return \Illuminate\Database\Query\Processors\Processor
         * @static
         */
        public static function getProcessor()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->getProcessor();
        }

        /**
         * Get the query grammar instance.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar
         * @static
         */
        public static function getGrammar()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->getGrammar();
        }

        /**
         * Use the "write" PDO connection when executing the query.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function useWritePdo()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->useWritePdo();
        }

        /**
         * Clone the query without the given properties.
         *
         * @param array $properties
         * @return static
         * @static
         */
        public static function cloneWithout($properties)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->cloneWithout($properties);
        }

        /**
         * Clone the query without the given bindings.
         *
         * @param array $except
         * @return static
         * @static
         */
        public static function cloneWithoutBindings($except)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->cloneWithoutBindings($except);
        }

        /**
         * Dump the current SQL and bindings.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function dump()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->dump();
        }

        /**
         * Die and dump the current SQL and bindings.
         *
         * @return \Illuminate\Database\Query\never
         * @static
         */
        public static function dd()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->dd();
        }

        /**
         * Explains the query.
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function explain()
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->explain();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Database\Query\Builder::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Database\Query\Builder::mixin($mixin, $replace);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Database\Query\Builder::flushMacros();
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->macroCall($method, $parameters);
        }
    }
    class Event extends \Illuminate\Support\Facades\Event {}
    class File extends \Illuminate\Support\Facades\File{}
    class Schema extends \Illuminate\Support\Facades\Schema
    {
    }
    class Storage extends \Illuminate\Support\Facades\Storage {}
}