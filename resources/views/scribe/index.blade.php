<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: November 28 2020</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://localhost:8000";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.3.0.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost:8000</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Endpoints</h1>
<h2>api/todos</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/todos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/todos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-GETapi-todos" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-todos"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-todos"></code></pre>
</div>
<div id="execution-error-GETapi-todos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-todos"></code></pre>
</div>
<form id="form-GETapi-todos" data-method="GET" data-path="api/todos" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-todos', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-todos" onclick="tryItOut('GETapi-todos');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-todos" onclick="cancelTryOut('GETapi-todos');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-todos" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/todos</code></b>
</p>
</form>
<h2>todoを登録する</h2>
<p>登録画面にて入力した情報をDBに登録する機能</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/todo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"facilis","note":"quia","complete_todo":false}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/todo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "facilis",
    "note": "quia",
    "complete_todo": false
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-todo" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-todo"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-todo"></code></pre>
</div>
<div id="execution-error-POSTapi-todo" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-todo"></code></pre>
</div>
<form id="form-POSTapi-todo" data-method="POST" data-path="api/todo" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-todo', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-todo" onclick="tryItOut('POSTapi-todo');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-todo" onclick="cancelTryOut('POSTapi-todo');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-todo" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/todo</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-todo" data-component="body" required  hidden>
<br>
Title of Todo</p>
<p>
<b><code>note</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="note" data-endpoint="POSTapi-todo" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>complete_todo</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-todo" hidden><input type="radio" name="complete_todo" value="true" data-endpoint="POSTapi-todo" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-todo" hidden><input type="radio" name="complete_todo" value="false" data-endpoint="POSTapi-todo" data-component="body" ><code>false</code></label>
<br>
</p>

</form>
<h2>api/todo/{id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/todo/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/todo/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-todo--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-todo--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-todo--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-todo--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-todo--id-"></code></pre>
</div>
<form id="form-DELETEapi-todo--id-" data-method="DELETE" data-path="api/todo/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-todo--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-todo--id-" onclick="tryItOut('DELETEapi-todo--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-todo--id-" onclick="cancelTryOut('DELETEapi-todo--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-todo--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/todo/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-todo--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>todoを更新する</h2>
<p>更新画面にて入力した情報をDBに登録する機能</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "http://localhost:8000/api/todo/17" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"necessitatibus","note":"unde","complete_todo":true}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/todo/17"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "necessitatibus",
    "note": "unde",
    "complete_todo": true
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
"id": 3</code></pre>
<div id="execution-results-PATCHapi-todo--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-todo--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-todo--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-todo--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-todo--id-"></code></pre>
</div>
<form id="form-PATCHapi-todo--id-" data-method="PATCH" data-path="api/todo/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-todo--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-todo--id-" onclick="tryItOut('PATCHapi-todo--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-todo--id-" onclick="cancelTryOut('PATCHapi-todo--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-todo--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/todo/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PATCHapi-todo--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PATCHapi-todo--id-" data-component="body" required  hidden>
<br>
Title of todo.</p>
<p>
<b><code>note</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="note" data-endpoint="PATCHapi-todo--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>complete_todo</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PATCHapi-todo--id-" hidden><input type="radio" name="complete_todo" value="true" data-endpoint="PATCHapi-todo--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PATCHapi-todo--id-" hidden><input type="radio" name="complete_todo" value="false" data-endpoint="PATCHapi-todo--id-" data-component="body" ><code>false</code></label>
<br>
</p>

</form>
<h2>Show the application&#039;s login form.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="NwvzyuAuOBxby3tdgYsqCyHdCrInjTHphXIPkxOU"&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src="http://localhost:8000/js/app.js" defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.gstatic.com"&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- Styles --&gt;
    &lt;link href="http://localhost:8000/css/app.css" rel="stylesheet"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="app"&gt;
        &lt;nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"&gt;
            &lt;div class="container"&gt;
                &lt;a class="navbar-brand" href="http://localhost:8000"&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
                    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav mr-auto"&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav ml-auto"&gt;
                        &lt;!-- Authentication Links --&gt;
                                                                                    &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost:8000/login"&gt;Login&lt;/a&gt;
                                &lt;/li&gt;

                                                            &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost:8000/register"&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;main class="py-4"&gt;
            &lt;div class="container"&gt;
    &lt;div class="row justify-content-center"&gt;
        &lt;div class="col-md-8"&gt;
            &lt;div class="card"&gt;
                &lt;div class="card-header"&gt;Login&lt;/div&gt;

                &lt;div class="card-body"&gt;
                    &lt;form method="POST" action="http://localhost:8000/login"&gt;
                        &lt;input type="hidden" name="_token" value="NwvzyuAuOBxby3tdgYsqCyHdCrInjTHphXIPkxOU"&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label for="email" class="col-md-4 col-form-label text-md-right"&gt;E-Mail Address&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="password" class="col-md-4 col-form-label text-md-right"&gt;Password&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="password" type="password" class="form-control " name="password" required autocomplete="current-password"&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;div class="col-md-6 offset-md-4"&gt;
                                &lt;div class="form-check"&gt;
                                    &lt;input class="form-check-input" type="checkbox" name="remember" id="remember" &gt;

                                    &lt;label class="form-check-label" for="remember"&gt;
                                        Remember Me
                                    &lt;/label&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row mb-0"&gt;
                            &lt;div class="col-md-8 offset-md-4"&gt;
                                &lt;button type="submit" class="btn btn-primary"&gt;
                                    Login
                                &lt;/button&gt;

                                                                    &lt;a class="btn btn-link" href="http://localhost:8000/password/reset"&gt;
                                        Forgot Your Password?
                                    &lt;/a&gt;
                                                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
        &lt;/main&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GETlogin" hidden>
    <blockquote>Received response<span id="execution-response-status-GETlogin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETlogin"></code></pre>
</div>
<div id="execution-error-GETlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETlogin"></code></pre>
</div>
<form id="form-GETlogin" data-method="GET" data-path="login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETlogin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETlogin" onclick="tryItOut('GETlogin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETlogin" onclick="cancelTryOut('GETlogin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETlogin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>login</code></b>
</p>
</form>
<h2>Handle a login request to the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTlogin" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogin"></code></pre>
</div>
<div id="execution-error-POSTlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogin"></code></pre>
</div>
<form id="form-POSTlogin" data-method="POST" data-path="login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogin" onclick="tryItOut('POSTlogin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogin" onclick="cancelTryOut('POSTlogin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>login</code></b>
</p>
</form>
<h2>Log the user out of the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTlogout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogout"></code></pre>
</div>
<div id="execution-error-POSTlogout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogout"></code></pre>
</div>
<form id="form-POSTlogout" data-method="POST" data-path="logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogout" onclick="tryItOut('POSTlogout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogout" onclick="cancelTryOut('POSTlogout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>logout</code></b>
</p>
</form>
<h2>Show the application registration form.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="NwvzyuAuOBxby3tdgYsqCyHdCrInjTHphXIPkxOU"&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src="http://localhost:8000/js/app.js" defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.gstatic.com"&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- Styles --&gt;
    &lt;link href="http://localhost:8000/css/app.css" rel="stylesheet"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="app"&gt;
        &lt;nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"&gt;
            &lt;div class="container"&gt;
                &lt;a class="navbar-brand" href="http://localhost:8000"&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
                    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav mr-auto"&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav ml-auto"&gt;
                        &lt;!-- Authentication Links --&gt;
                                                                                    &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost:8000/login"&gt;Login&lt;/a&gt;
                                &lt;/li&gt;

                                                            &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost:8000/register"&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;main class="py-4"&gt;
            &lt;div class="container"&gt;
    &lt;div class="row justify-content-center"&gt;
        &lt;div class="col-md-8"&gt;
            &lt;div class="card"&gt;
                &lt;div class="card-header"&gt;Register&lt;/div&gt;

                &lt;div class="card-body"&gt;
                    &lt;form method="POST" action="http://localhost:8000/register"&gt;
                        &lt;input type="hidden" name="_token" value="NwvzyuAuOBxby3tdgYsqCyHdCrInjTHphXIPkxOU"&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label for="name" class="col-md-4 col-form-label text-md-right"&gt;Name&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name" autofocus&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="email" class="col-md-4 col-form-label text-md-right"&gt;E-Mail Address&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email"&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="password" class="col-md-4 col-form-label text-md-right"&gt;Password&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="password" type="password" class="form-control " name="password" required autocomplete="new-password"&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="password-confirm" class="col-md-4 col-form-label text-md-right"&gt;Confirm Password&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row mb-0"&gt;
                            &lt;div class="col-md-6 offset-md-4"&gt;
                                &lt;button type="submit" class="btn btn-primary"&gt;
                                    Register
                                &lt;/button&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
        &lt;/main&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GETregister" hidden>
    <blockquote>Received response<span id="execution-response-status-GETregister"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETregister"></code></pre>
</div>
<div id="execution-error-GETregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETregister"></code></pre>
</div>
<form id="form-GETregister" data-method="GET" data-path="register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETregister', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETregister" onclick="tryItOut('GETregister');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETregister" onclick="cancelTryOut('GETregister');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETregister" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>register</code></b>
</p>
</form>
<h2>Handle a registration request for the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTregister" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTregister"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTregister"></code></pre>
</div>
<div id="execution-error-POSTregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregister"></code></pre>
</div>
<form id="form-POSTregister" data-method="POST" data-path="register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTregister', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTregister" onclick="tryItOut('POSTregister');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTregister" onclick="cancelTryOut('POSTregister');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTregister" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>register</code></b>
</p>
</form>
<h2>Display the form to request a password reset link.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="NwvzyuAuOBxby3tdgYsqCyHdCrInjTHphXIPkxOU"&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src="http://localhost:8000/js/app.js" defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.gstatic.com"&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- Styles --&gt;
    &lt;link href="http://localhost:8000/css/app.css" rel="stylesheet"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="app"&gt;
        &lt;nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"&gt;
            &lt;div class="container"&gt;
                &lt;a class="navbar-brand" href="http://localhost:8000"&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
                    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav mr-auto"&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav ml-auto"&gt;
                        &lt;!-- Authentication Links --&gt;
                                                                                    &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost:8000/login"&gt;Login&lt;/a&gt;
                                &lt;/li&gt;

                                                            &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost:8000/register"&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;main class="py-4"&gt;
            &lt;div class="container"&gt;
    &lt;div class="row justify-content-center"&gt;
        &lt;div class="col-md-8"&gt;
            &lt;div class="card"&gt;
                &lt;div class="card-header"&gt;Reset Password&lt;/div&gt;

                &lt;div class="card-body"&gt;

                    &lt;form method="POST" action="http://localhost:8000/password/email"&gt;
                        &lt;input type="hidden" name="_token" value="NwvzyuAuOBxby3tdgYsqCyHdCrInjTHphXIPkxOU"&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label for="email" class="col-md-4 col-form-label text-md-right"&gt;E-Mail Address&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row mb-0"&gt;
                            &lt;div class="col-md-6 offset-md-4"&gt;
                                &lt;button type="submit" class="btn btn-primary"&gt;
                                    Send Password Reset Link
                                &lt;/button&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
        &lt;/main&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GETpassword-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-reset"></code></pre>
</div>
<div id="execution-error-GETpassword-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-reset"></code></pre>
</div>
<form id="form-GETpassword-reset" data-method="GET" data-path="password/reset" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-reset" onclick="tryItOut('GETpassword-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-reset" onclick="cancelTryOut('GETpassword-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/reset</code></b>
</p>
</form>
<h2>Send a reset link to the given user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTpassword-email" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-email"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-email"></code></pre>
</div>
<div id="execution-error-POSTpassword-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-email"></code></pre>
</div>
<form id="form-POSTpassword-email" data-method="POST" data-path="password/email" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-email', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-email" onclick="tryItOut('POSTpassword-email');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-email" onclick="cancelTryOut('POSTpassword-email');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-email" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/email</code></b>
</p>
</form>
<h2>Display the password reset view for the given token.</h2>
<p>If no token is present, display the link request form.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/password/reset/laborum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/password/reset/laborum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="NwvzyuAuOBxby3tdgYsqCyHdCrInjTHphXIPkxOU"&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src="http://localhost:8000/js/app.js" defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.gstatic.com"&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- Styles --&gt;
    &lt;link href="http://localhost:8000/css/app.css" rel="stylesheet"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="app"&gt;
        &lt;nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"&gt;
            &lt;div class="container"&gt;
                &lt;a class="navbar-brand" href="http://localhost:8000"&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
                    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav mr-auto"&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav ml-auto"&gt;
                        &lt;!-- Authentication Links --&gt;
                                                                                    &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost:8000/login"&gt;Login&lt;/a&gt;
                                &lt;/li&gt;

                                                            &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost:8000/register"&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;main class="py-4"&gt;
            &lt;div class="container"&gt;
    &lt;div class="row justify-content-center"&gt;
        &lt;div class="col-md-8"&gt;
            &lt;div class="card"&gt;
                &lt;div class="card-header"&gt;Reset Password&lt;/div&gt;

                &lt;div class="card-body"&gt;
                    &lt;form method="POST" action="http://localhost:8000/password/reset"&gt;
                        &lt;input type="hidden" name="_token" value="NwvzyuAuOBxby3tdgYsqCyHdCrInjTHphXIPkxOU"&gt;
                        &lt;input type="hidden" name="token" value="laborum"&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="email" class="col-md-4 col-form-label text-md-right"&gt;E-Mail Address&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="password" class="col-md-4 col-form-label text-md-right"&gt;Password&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="password" type="password" class="form-control " name="password" required autocomplete="new-password"&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="password-confirm" class="col-md-4 col-form-label text-md-right"&gt;Confirm Password&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row mb-0"&gt;
                            &lt;div class="col-md-6 offset-md-4"&gt;
                                &lt;button type="submit" class="btn btn-primary"&gt;
                                    Reset Password
                                &lt;/button&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
        &lt;/main&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GETpassword-reset--token-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-reset--token-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-reset--token-"></code></pre>
</div>
<div id="execution-error-GETpassword-reset--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-reset--token-"></code></pre>
</div>
<form id="form-GETpassword-reset--token-" data-method="GET" data-path="password/reset/{token}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-reset--token-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-reset--token-" onclick="tryItOut('GETpassword-reset--token-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-reset--token-" onclick="cancelTryOut('GETpassword-reset--token-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-reset--token-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/reset/{token}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="GETpassword-reset--token-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Reset the given user&#039;s password.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTpassword-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-reset"></code></pre>
</div>
<div id="execution-error-POSTpassword-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-reset"></code></pre>
</div>
<form id="form-POSTpassword-reset" data-method="POST" data-path="password/reset" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-reset" onclick="tryItOut('POSTpassword-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-reset" onclick="cancelTryOut('POSTpassword-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/reset</code></b>
</p>
</form>
<h2>Display the password confirmation view.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETpassword-confirm" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-confirm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-confirm"></code></pre>
</div>
<div id="execution-error-GETpassword-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-confirm"></code></pre>
</div>
<form id="form-GETpassword-confirm" data-method="GET" data-path="password/confirm" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-confirm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-confirm" onclick="tryItOut('GETpassword-confirm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-confirm" onclick="cancelTryOut('GETpassword-confirm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-confirm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/confirm</code></b>
</p>
</form>
<h2>Confirm the given user&#039;s password.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTpassword-confirm" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-confirm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-confirm"></code></pre>
</div>
<div id="execution-error-POSTpassword-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-confirm"></code></pre>
</div>
<form id="form-POSTpassword-confirm" data-method="POST" data-path="password/confirm" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-confirm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-confirm" onclick="tryItOut('POSTpassword-confirm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-confirm" onclick="cancelTryOut('POSTpassword-confirm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-confirm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/confirm</code></b>
</p>
</form>
<h2>Show the application dashboard.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="NwvzyuAuOBxby3tdgYsqCyHdCrInjTHphXIPkxOU"&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src="http://localhost:8000/js/app.js" defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.gstatic.com"&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- Styles --&gt;
    &lt;link href="http://localhost:8000/css/app.css" rel="stylesheet"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="app"&gt;
        &lt;nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"&gt;
            &lt;div class="container"&gt;
                &lt;a class="navbar-brand" href="http://localhost:8000"&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
                    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav mr-auto"&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav ml-auto"&gt;
                        &lt;!-- Authentication Links --&gt;
                                                                                    &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost:8000/login"&gt;Login&lt;/a&gt;
                                &lt;/li&gt;

                                                            &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost:8000/register"&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;main class="py-4"&gt;
            &lt;div class="container"&gt;
    &lt;div class="row justify-content-center"&gt;
        &lt;div class="col-md-8"&gt;
            &lt;div class="card"&gt;
                &lt;div class="card-header"&gt;Dashboard&lt;/div&gt;

                &lt;div class="card-body"&gt;

                    You are logged in!
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
        &lt;/main&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GEThome" hidden>
    <blockquote>Received response<span id="execution-response-status-GEThome"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEThome"></code></pre>
</div>
<div id="execution-error-GEThome" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEThome"></code></pre>
</div>
<form id="form-GEThome" data-method="GET" data-path="home" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEThome', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEThome" onclick="tryItOut('GEThome');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEThome" onclick="cancelTryOut('GEThome');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEThome" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>home</code></b>
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>