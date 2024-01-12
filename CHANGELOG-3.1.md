# v3.1.6 - TBD

## Added

- [#6449](https://github.com/hyperf/hyperf/pull/6449) Added method `ReflectionManager::getAllClassesByFinder`.

## Optimized

- [#6440](https://github.com/hyperf/hyperf/pull/6440) Optimized code of `Hyperf\SocketIOServer\Parser\Decoder::decode()`.

# v3.1.5 - 2024-01-04

## Fixed

- [#6423](https://github.com/hyperf/hyperf/pull/6423) Fixed bug that the timezone of crontab task cannot work.
- [#6436](https://github.com/hyperf/hyperf/pull/6436) Fixed bug that the generator which be used to generate amqp consumer cannot work.

## Added

- [#6431](https://github.com/hyperf/hyperf/pull/6431) Added `UnsetContextInTaskWorkerListener` which can be used to unset connection context when using non-coroutine task worker.

## Optimized

- [#6435](https://github.com/hyperf/hyperf/pull/6435) [#6437](https://github.com/hyperf/hyperf/pull/6437) Optimized model generator which can generate property comments with `use`.

# v3.1.4 - 2023-12-29

## Fixed

- [#6419](https://github.com/hyperf/hyperf/pull/6419) Fixed bug that `prepareHandler` cannot work sometimes for `circuit-breaker`.

## Added

- [#6426](https://github.com/hyperf/hyperf/pull/6426) Added Annotation `RewriteReturnType` which used to rewrite the return type when generating models.

## Optimized

- [#6415](https://github.com/hyperf/hyperf/pull/6415) Throw `InvalidArgumentException` instead of `TypeError` for decoding an empty string when using `Base62::decode`.

# v3.1.3 - 2023-12-21

## Fixed

- [#6389](https://github.com/hyperf/hyperf/pull/6389) Fixed bug that es version cannot be found when the index is null.
- [#6406](https://github.com/hyperf/hyperf/pull/6406) Fixed bug that `Hyperf\Scout\Searchable` don't import namespace of function `config`.

## Added

- [#6398](https://github.com/hyperf/hyperf/pull/6398) Added `timezone` parameter to `hyperf/crontab` component.
- [#6402](https://github.com/hyperf/hyperf/pull/6402) Added `template_suffix` configuration to `twig` engine.

# v3.1.2 - 2023-12-15

## Fixed

- [#6372](https://github.com/hyperf/hyperf/pull/6372) Fixed bug that AOP not working when using variadic parameters.
- [#6374](https://github.com/hyperf/hyperf/pull/6374) Fixed bug that `RateLimitAnnotationAspect::getWeightingAnnotation()` cannot work when using config `rate_limit.storage`.
- [#6384](https://github.com/hyperf/hyperf/pull/6384) Fixed bug that `scout` cannot work when using elasticsearch(which version is less than 7) without index.

## Added

- [#6357](https://github.com/hyperf/hyperf/pull/6357) Support symfony 7.x for some components such as `command` `config` `devtool` `di` and `server`.
- [#6373](https://github.com/hyperf/hyperf/pull/6373) Support `ping` method for `grpc client`.
- [#6379](https://github.com/hyperf/hyperf/pull/6379) Support to read custom attribute for validation when using swagger.
- [#6380](https://github.com/hyperf/hyperf/pull/6380) Support collect swagger validation rules and attribute for mediaType request body.

## Optimized

- [#6376](https://github.com/hyperf/hyperf/pull/6376) Don't need to close swoole short name when don't use swoole or don't require `hyperf/polyfill-coroutine` component.

# v3.1.1 - 2023-12-08

## Fixed

- [#6347](https://github.com/hyperf/hyperf/pull/6347) Fixed bug that the view function may add redundant content-type to header.
- [#6352](https://github.com/hyperf/hyperf/pull/6352) Fixed bug that nacos config center cannot work when using grpc protocol.
- [#6350](https://github.com/hyperf/hyperf/pull/6350) Fixed bug that the recv channel cannot be found, because `GrpcClient::runReceiveCoroutine` will unset streamId before recv method.
- [#6361](https://github.com/hyperf/hyperf/pull/6361) Fixed bug that `Hyperf\SocketIOServer\Emitter\Future` cannot be resolved.
- [#6369](https://github.com/hyperf/hyperf/pull/6369) Fixed bug that the main process did not handle the abnormal exit of the fork process.

## Added

- [#6342](https://github.com/hyperf/hyperf/pull/6342) Added `Coroutine::fork()` method and `Coroutine::pid()` method.
- [#6360](https://github.com/hyperf/hyperf/pull/6360) Added response `content-type` header for swagger server.
- [#6363](https://github.com/hyperf/hyperf/pull/6363) Added callable type support to the fallback property of CircuitBreaker Attribute.

# v3.1.0 - 2023-12-01

## Dependencies Upgrade

- Upgrade the php version to `>=8.1`
- Upgrade the swoole version to `>=5.0`
- Upgrade `hyperf/engine` to `^2.0`
- Upgrade `phpunit/phpunit` to `^10.0`

## Swow Supported

- [#5843](https://github.com/hyperf/hyperf/pull/5843) Support `Swow` for `reactive-x`.
- [#5844](https://github.com/hyperf/hyperf/pull/5844) Support `Swow` for `socketio-server`.

## Added

- [x] Support [Psr7Plus](https://github.com/swow/psr7-plus).
    - [#5828](https://github.com/hyperf/hyperf/pull/5828) Support swow psr7-plus interface for `http-message`.
    - [#5839](https://github.com/hyperf/hyperf/pull/5839) Support swow psr7-plus interface for all components.
- [x] Support [pest](https://github.com/pestphp/pest).
- [x] Added `hyperf/helper` component.
- [x] Added `hyperf/polyfill-coroutine` component.
- [#5815](https://github.com/hyperf/hyperf/pull/5815) Added alias as `mysql` for `pdo` in `hyperf/db`.
- [#5849](https://github.com/hyperf/hyperf/pull/5849) Support for insert update and select using enums.
- [#5894](https://github.com/hyperf/hyperf/pull/5894) [#5897](https://github.com/hyperf/hyperf/pull/5897) Added `model-factory` support for `hyperf/testing`.
- [#5898](https://github.com/hyperf/hyperf/pull/5898) Added `toRawSql()` to Query Builders.
- [#5906](https://github.com/hyperf/hyperf/pull/5906) Added `getRawQueryLog()` to Database Connection.
- [#5915](https://github.com/hyperf/hyperf/pull/5915) Added `data_forget` helper.
- [#5914](https://github.com/hyperf/hyperf/pull/5914) Added `Str::isUrl()` and use it from the validator.
- [#5918](https://github.com/hyperf/hyperf/pull/5918) Added `Arr::isList()` method.
- [#5925](https://github.com/hyperf/hyperf/pull/5925) [#5926](https://github.com/hyperf/hyperf/pull/5926) Allow model attributes to be casted to/from an Enum.
- [#5930](https://github.com/hyperf/hyperf/pull/5930) [#5934](https://github.com/hyperf/hyperf/pull/5934) Added `AsCommand` annotation and `ClosureCommand` support.
- [#5950](https://github.com/hyperf/hyperf/pull/5950) Added `Job::setMaxAttempts` method and `dispatch` helper function for `hyperf/async-queue`.
- [#5967](https://github.com/hyperf/hyperf/pull/5967) Added component `hyperf/migration-generator` which used to generate migrations from databases.
- [#5983](https://github.com/hyperf/hyperf/pull/5983) [#5985](https://github.com/hyperf/hyperf/pull/5985) Added `skipCacheResults` to annotations of `hyperf/cache`.
- [#5994](https://github.com/hyperf/hyperf/pull/5994) Added `events` of `crontab` lifecycle.
- [#6039](https://github.com/hyperf/hyperf/pull/6039) Support semantic crontab rules.
- [#6082](https://github.com/hyperf/hyperf/pull/6082) Added `hyperf/stdlib` component.
- [#6085](https://github.com/hyperf/hyperf/pull/6085) Added an error count to the database connection to ensure that the connection can be reset when occur too many exceptions.
- [#6106](https://github.com/hyperf/hyperf/pull/6106) Support some validation rules.
- [#6124](https://github.com/hyperf/hyperf/pull/6124) Added `Hyperf\AsyncQueue\Job::fail()`.
- [#6259](https://github.com/hyperf/hyperf/pull/6259) Support to use model builder as the column in `Hyperf\Database\Query\Builder\addSelect`.
- [#6301](https://github.com/hyperf/hyperf/pull/6301) Improve storage switcher for rate-limit.
- [#6338](https://github.com/hyperf/hyperf/pull/6338) Added config `processors` for swagger.

## Optimized

- Move Prometheus driver dependency to suggest.
- [#5586](https://github.com/hyperf/hyperf/pull/5586) Support grpc streaming for nacos naming service.
- [#5866](https://github.com/hyperf/hyperf/pull/5866) Use `StrCache` instead of `Str` in special cases.
- [#5872](https://github.com/hyperf/hyperf/pull/5872) Avoid to execute the refresh callback more than once when calling `refresh()` multi times.
- [#5879](https://github.com/hyperf/hyperf/pull/5879) [#5878](https://github.com/hyperf/hyperf/pull/5878) Improve `Command`.
- [#5901](https://github.com/hyperf/hyperf/pull/5901) Optimized code for identifer established by the rpc client that must contain a string,number or null if included.
- [#5905](https://github.com/hyperf/hyperf/pull/5905) Forget with collections.
- [#5917](https://github.com/hyperf/hyperf/pull/5917) Upgrade URL pattern for `Str::isUrl()`.
- [#5920](https://github.com/hyperf/hyperf/pull/5920) add the `\Stringable` interface to classes that have `__toString()` method.
- [#5945](https://github.com/hyperf/hyperf/pull/5945) Don't sync config frequently when listen more than one namespace for apollo config center.
- [#5948](https://github.com/hyperf/hyperf/pull/5948) Optimized `Hyperf\Coroutine\Locker`.
- [#5960](https://github.com/hyperf/hyperf/pull/5960) Allowed set poolName in Annotation.
- [#5972](https://github.com/hyperf/hyperf/pull/5972) `Collection::except()` with null returns all.
- [#5973](https://github.com/hyperf/hyperf/pull/5973) Simplified the handlers definition of logger.
- [#6010](https://github.com/hyperf/hyperf/pull/6010) Throw exception when cast class is not existed.
- [#6030](https://github.com/hyperf/hyperf/pull/6030) Support buffer mechanism in standalone process of metric.
- [#6131](https://github.com/hyperf/hyperf/pull/6131) Throw invalid argument exception when the crontab task is `null`.
- [#6172](https://github.com/hyperf/hyperf/pull/6172) Optimized `ProcessManager` to make the `running` status more clear.
- [#6184](https://github.com/hyperf/hyperf/pull/6184) Set logger when using safe socket in coroutine style tcp server.
- [#6247](https://github.com/hyperf/hyperf/pull/6247) Optimized code that you can get request from `BadRequestHttpException`.

## Removed

- [x] Remove unused codes in `hyperf/utils`.
- [x] Remove redundant `setAccessible` methods.
- [x] Remove deprecated codes.
- [#5813](https://github.com/hyperf/hyperf/pull/5813) Removed support for swoole 4.x
- [#5859](https://github.com/hyperf/hyperf/pull/5859) Removed string cache from `Hyperf\Stringable\Str`
- [#6040](https://github.com/hyperf/hyperf/pull/6040) Removed some deprecated methods from `Hyperf\Di\Annotation\AbstractAnnotation`.
- [#6043](https://github.com/hyperf/hyperf/pull/6043) Removed deprecated `Hyperf\Coroutine\Traits\Container`.
- [#6244](https://github.com/hyperf/hyperf/pull/6244) Removed deprecated component `swoole-tracker`.

## Changed

- [x] Throw exceptions when the redis option key is invalid.
- [#5847](https://github.com/hyperf/hyperf/pull/5847) Changed the default redis key for metric.
- [#5943](https://github.com/hyperf/hyperf/pull/5943) Don't remove the node from load balancer of `json rpc http transporter` when the status code isn't 200.
- [#5961](https://github.com/hyperf/hyperf/pull/5961) Using `enum` instead of `class` for `Hyperf\Amqp\Result` and `Hyperf\Amqp\Message\Type`.
- [#6022](https://github.com/hyperf/hyperf/pull/6022) When using `Base62::decode` to decode the incorrect data, it should be thrown `InvalidArgumentException` instead of `TypeError`.
- [#6128](https://github.com/hyperf/hyperf/pull/6128) When using multi-level directories for `hyperf/config`, you can use `config('a.c')` to get the configurations from `autoload/a/c.php`.

## Fixed

- [#5771](https://github.com/hyperf/hyperf/pull/5771) Fixed bug that the return type of `Model::updateOrInsert` isn't boolean.
- [#6033](https://github.com/hyperf/hyperf/pull/6033) Fixed bug that `RequestContext` and `ResponseContext` cannot get instance from another coroutines.
- [#6056](https://github.com/hyperf/hyperf/pull/6056) Fixed bug that `Hyperf\HttpServer\Request::hasFile()` don't support `Swow`.
- [#6260](https://github.com/hyperf/hyperf/pull/6260) Fixed bug that logger cannot work in `LoadBalancerInterface::refresh()`.

## Deprecated

- `Hyperf\DB\PgSQL\PgSQLConnection::str_replace_once` will be deprecated, please use `Hyperf\DB\PgSQL\PgSQLConnection::strReplaceOnce` instead.
- `Hyperf\Database\PgSQL\PostgreSqlSwooleExtConnection::str_replace_once` will be deprecated, please use `Hyperf\Database\PgSQL\PostgreSqlSwooleExtConnection::strReplaceOnce` instead.
