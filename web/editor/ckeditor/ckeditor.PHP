<!DOCTYPE html>
<!--
Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->
<html>
    <head>
        <meta charset="utf-8">
        <title>CKEditor Sample</title>
        <script src="../ckeditor.js"></script>
        <script src="js/sample.js"></script>
        <link rel="stylesheet" href="css/samples.css">
        <link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css">
    </head>
    <body id="main">

        <nav class="navigation-a">
            <div class="grid-container">
                <ul class="navigation-a-left grid-width-70">
                    <li><a href="http://ckeditor.com">Project Homepage</a></li>
                    <li><a href="http://dev.ckeditor.com/">I found a bug</a></li>
                    <li><a href="http://github.com/ckeditor/ckeditor-dev" class="icon-pos-right icon-navigation-a-github">Fork CKEditor on GitHub</a></li>
                </ul>
                <ul class="navigation-a-right grid-width-30">
                    <li><a href="http://ckeditor.com/blog-list">CKEditor Blog</a></li>
                </ul>
            </div>
        </nav>

        <header class="header-a">
        </header>

        <main>
            <div class="adjoined-bottom">
                <div class="grid-container">
                    <div class="grid-width-100">
                        <div id="editor">
                            <h1>Hello world!</h1>
                            <p>I'm an instance of <a href="http://ckeditor.com">CKEditor</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script>
            initSample();
        </script>

    </body>
</html>
