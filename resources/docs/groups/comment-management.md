# Comment management

APIs for managing Comments

## View All Comments of a Posts .

<small class="badge badge-darkred">requires authentication</small>

This endpoint allows you to view all Comments of a Post.

> Example request:

```bash
curl -X GET \
    -G "http://blog.test/api/blog-posts/1/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://blog.test/api/blog-posts/1/comments"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-blog-posts--blogPost--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-blog-posts--blogPost--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-blog-posts--blogPost--comments"></code></pre>
</div>
<div id="execution-error-GETapi-blog-posts--blogPost--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-blog-posts--blogPost--comments"></code></pre>
</div>
<form id="form-GETapi-blog-posts--blogPost--comments" data-method="GET" data-path="api/blog-posts/{blogPost}/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-blog-posts--blogPost--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-blog-posts--blogPost--comments" onclick="tryItOut('GETapi-blog-posts--blogPost--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-blog-posts--blogPost--comments" onclick="cancelTryOut('GETapi-blog-posts--blogPost--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-blog-posts--blogPost--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/blog-posts/{blogPost}/comments</code></b>
</p>
<p>
<label id="auth-GETapi-blog-posts--blogPost--comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-blog-posts--blogPost--comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>blogPost</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="blogPost" data-endpoint="GETapi-blog-posts--blogPost--comments" data-component="url" required  hidden>
<br>
The id of the Post.</p>
</form>


## Create a New Comment .


This endpoint lets you create a comment.

> Example request:

```bash
curl -X POST \
    "http://blog.test/api/blog-posts/1/comments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"comment":"enim"}'

```

```javascript
const url = new URL(
    "http://blog.test/api/blog-posts/1/comments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "comment": "enim"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-blog-posts--blogPost--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-blog-posts--blogPost--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-blog-posts--blogPost--comments"></code></pre>
</div>
<div id="execution-error-POSTapi-blog-posts--blogPost--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-blog-posts--blogPost--comments"></code></pre>
</div>
<form id="form-POSTapi-blog-posts--blogPost--comments" data-method="POST" data-path="api/blog-posts/{blogPost}/comments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-blog-posts--blogPost--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-blog-posts--blogPost--comments" onclick="tryItOut('POSTapi-blog-posts--blogPost--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-blog-posts--blogPost--comments" onclick="cancelTryOut('POSTapi-blog-posts--blogPost--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-blog-posts--blogPost--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/blog-posts/{blogPost}/comments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>blogPost</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="blogPost" data-endpoint="POSTapi-blog-posts--blogPost--comments" data-component="url" required  hidden>
<br>
The id of the Post.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-blog-posts--blogPost--comments" data-component="body"  hidden>
<br>
Comment.</p>

</form>


## View Comment .


This endpoint lets you to View Comment.

> Example request:

```bash
curl -X GET \
    -G "http://blog.test/api/blog-posts/1/comments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://blog.test/api/blog-posts/1/comments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-blog-posts--blogPost--comments--comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-blog-posts--blogPost--comments--comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-blog-posts--blogPost--comments--comment-"></code></pre>
</div>
<div id="execution-error-GETapi-blog-posts--blogPost--comments--comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-blog-posts--blogPost--comments--comment-"></code></pre>
</div>
<form id="form-GETapi-blog-posts--blogPost--comments--comment-" data-method="GET" data-path="api/blog-posts/{blogPost}/comments/{comment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-blog-posts--blogPost--comments--comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-blog-posts--blogPost--comments--comment-" onclick="tryItOut('GETapi-blog-posts--blogPost--comments--comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-blog-posts--blogPost--comments--comment-" onclick="cancelTryOut('GETapi-blog-posts--blogPost--comments--comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-blog-posts--blogPost--comments--comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/blog-posts/{blogPost}/comments/{comment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>blogPost</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="blogPost" data-endpoint="GETapi-blog-posts--blogPost--comments--comment-" data-component="url" required  hidden>
<br>
The id of the Post.</p>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="GETapi-blog-posts--blogPost--comments--comment-" data-component="url" required  hidden>
<br>
The id of the comment.</p>
</form>


## Update Comment .


This endpoint lets you to Update Comment.

> Example request:

```bash
curl -X PUT \
    "http://blog.test/api/blog-posts/1/comments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"comment":"quo"}'

```

```javascript
const url = new URL(
    "http://blog.test/api/blog-posts/1/comments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "comment": "quo"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-blog-posts--blogPost--comments--comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-blog-posts--blogPost--comments--comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-blog-posts--blogPost--comments--comment-"></code></pre>
</div>
<div id="execution-error-PUTapi-blog-posts--blogPost--comments--comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-blog-posts--blogPost--comments--comment-"></code></pre>
</div>
<form id="form-PUTapi-blog-posts--blogPost--comments--comment-" data-method="PUT" data-path="api/blog-posts/{blogPost}/comments/{comment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-blog-posts--blogPost--comments--comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-blog-posts--blogPost--comments--comment-" onclick="tryItOut('PUTapi-blog-posts--blogPost--comments--comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-blog-posts--blogPost--comments--comment-" onclick="cancelTryOut('PUTapi-blog-posts--blogPost--comments--comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-blog-posts--blogPost--comments--comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/blog-posts/{blogPost}/comments/{comment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>blogPost</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="blogPost" data-endpoint="PUTapi-blog-posts--blogPost--comments--comment-" data-component="url" required  hidden>
<br>
The id of the Post.</p>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="PUTapi-blog-posts--blogPost--comments--comment-" data-component="url" required  hidden>
<br>
The id of the comment.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="comment" data-endpoint="PUTapi-blog-posts--blogPost--comments--comment-" data-component="body"  hidden>
<br>
</p>

</form>


## Delete Comment .


This endpoint lets you to Delete Comment.

> Example request:

```bash
curl -X DELETE \
    "http://blog.test/api/blog-posts/1/comments/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://blog.test/api/blog-posts/1/comments/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-blog-posts--blogPost--comments--comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-blog-posts--blogPost--comments--comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-blog-posts--blogPost--comments--comment-"></code></pre>
</div>
<div id="execution-error-DELETEapi-blog-posts--blogPost--comments--comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-blog-posts--blogPost--comments--comment-"></code></pre>
</div>
<form id="form-DELETEapi-blog-posts--blogPost--comments--comment-" data-method="DELETE" data-path="api/blog-posts/{blogPost}/comments/{comment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-blog-posts--blogPost--comments--comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-blog-posts--blogPost--comments--comment-" onclick="tryItOut('DELETEapi-blog-posts--blogPost--comments--comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-blog-posts--blogPost--comments--comment-" onclick="cancelTryOut('DELETEapi-blog-posts--blogPost--comments--comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-blog-posts--blogPost--comments--comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/blog-posts/{blogPost}/comments/{comment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>blogPost</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="blogPost" data-endpoint="DELETEapi-blog-posts--blogPost--comments--comment-" data-component="url" required  hidden>
<br>
The id of the Post.</p>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="DELETEapi-blog-posts--blogPost--comments--comment-" data-component="url" required  hidden>
<br>
The id of the comment.</p>
</form>



