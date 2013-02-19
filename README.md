cnBootstrap
============

<a href="http://getbootstrap.com">
  <img src="http://twitter.github.com/bootstrap/assets/img/bootstrap-docs-readme.png" width="100px">
</a>

# [Bootstrap v2.3.0](http://twitter.github.com/bootstrap) [![Build Status](https://secure.travis-ci.org/twitter/bootstrap.png)](http://travis-ci.org/twitter/bootstrap)


cnBootstrap 是 Twitter 开发的前端框架 Bootstrap 的中文版——是时尚、直观、强大的前端框架，能使Web开发更快，更容易。


cnBootstrap 收集了网络上遇到的大多数[前端 bug 和 fixed](http://www.tcrearor.info/cnBootstrap/cnDocs/bugs-and-fixed.php)，列表于此。

To get started, checkout [http://getbootstrap.com](http://getbootstrap.com)!

cnBootstrap 集成了 aliceui 兼容解决方案（包括但不限于aliceui），亦将我所了解的解决方案也整合进了[前端兼容解决方案](http://www.tcrearor.info/cnBootstrap/cnDocs/solution.php)列表，现仍在完善中...

cnBootstrap 把参考研究的前端界比较好的项目进行了简单的分类，列表于[项目页面](http://www.tcrearor.info/cnBootstrap/cnDocs/project.php)


## 意见反馈 ##

请在[Blog](http://www.tcrearor.info/cnBootstrap/)留言或在[项目页](https://github.com/webcoding/cnBootstrap)提交BUG

# Git管理工具指南 

本项目使用Git管理，如果您对Git的使用不甚熟悉，可以参考[useGit使用指南](https://github.com/webcoding/useGit)项目，包含详细的Git教程讲解以及Git命令。


## Versioning

For transparency and insight into our release cycle, and for striving to maintain backward compatibility, Bootstrap will be maintained under the Semantic Versioning guidelines as much as possible.

Releases will be numbered with the following format:

`<major>.<minor>.<patch>`

And constructed with the following guidelines:

* Breaking backward compatibility bumps the major (and resets the minor and patch)
* New additions without breaking backward compatibility bumps the minor (and resets the patch)
* Bug fixes and misc changes bumps the patch

For more information on SemVer, please visit [http://semver.org/](http://semver.org/).



## Bug tracker

Have a bug or a feature request? [Please open a new issue](https://github.com/twitter/bootstrap/issues). Before opening any issue, please search for existing issues and read the [Issue Guidelines](https://github.com/necolas/issue-guidelines), written by [Nicolas Gallagher](https://github.com/necolas/).



## Community

Keep track of development and community news.

* Follow [@twbootstrap on Twitter](http://twitter.com/twbootstrap).
* Read and subscribe to the [The Official Twitter Bootstrap Blog](http://blog.getbootstrap.com).
* Have a question that's not a feature request or bug report? [Ask on the mailing list.](http://groups.google.com/group/twitter-bootstrap)
* Chat with fellow Bootstrappers in IRC. On the `irc.freenode.net` server, in the `##twitter-bootstrap` channel.



## Developers

We have included a makefile with convenience methods for working with the Bootstrap library.

+ **dependencies**
Our makefile depends on you having recess, connect, uglify.js, and jshint installed. To install, just run the following command in npm:

```
$ npm install recess connect uglify-js jshint -g
```

+ **build** - `make`
Runs the recess compiler to rebuild the `/less` files and compiles the docs pages. Requires recess and uglify-js. <a href="http://twitter.github.com/bootstrap/extend.html#compiling">Read more in our docs &raquo;</a>

+ **test** - `make test`
Runs jshint and qunit tests headlessly in [phantomjs](http://code.google.com/p/phantomjs/) (used for ci). Depends on having phantomjs installed.

+ **watch** - `make watch`
This is a convenience method for watching just Less files and automatically building them whenever you save. Requires the Watchr gem.



## Contributing

Please submit all pull requests against *-wip branches. If your pull request contains JavaScript patches or features, you must include relevant unit tests. All HTML and CSS should conform to the [Code Guide](http://github.com/mdo/code-guide), maintained by [Mark Otto](http://github.com/mdo).

Thanks!



## Authors

**Mark Otto**

+ [http://twitter.com/mdo](http://twitter.com/mdo)
+ [http://github.com/mdo](http://github.com/mdo)

**Jacob Thornton**

+ [http://twitter.com/fat](http://twitter.com/fat)
+ [http://github.com/fat](http://github.com/fat)



## Copyright and license

Copyright 2012 Twitter, Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this work except in compliance with the License.
You may obtain a copy of the License in the LICENSE file, or at:

  [http://www.apache.org/licenses/LICENSE-2.0](http://www.apache.org/licenses/LICENSE-2.0)

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

