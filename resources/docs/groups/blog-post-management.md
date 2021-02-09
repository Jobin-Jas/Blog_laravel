# Blog Post management

APIs for managing Blog Posts

## View All Blog Posts .

<small class="badge badge-darkred">requires authentication</small>

This endpoint allows you to view all Blog Posts with number of likes and Comments.

> Example request:

```bash
curl -X GET \
    -G "http://blog.test/api/blog-posts/all" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://blog.test/api/blog-posts/all"
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


> Example response (200):

```json
[
    {
        "id": 1,
        "title": "first post",
        "image": null,
        "user_id": 1,
        "body": "the body of the post",
        "created_at": "2021-02-05T13:09:08.000000Z",
        "likes_count": 0,
        "comments_count": 1
    },
    {
        "id": 2,
        "title": "first postddddd",
        "image": null,
        "user_id": 2,
        "body": "the body of the postddd",
        "created_at": "2021-02-05T14:12:38.000000Z",
        "likes_count": 0,
        "comments_count": 0
    },
    {
        "id": 3,
        "title": "first postddddd",
        "image": null,
        "user_id": 1,
        "body": "the body of the postddd",
        "created_at": "2021-02-08T07:00:12.000000Z",
        "likes_count": 0,
        "comments_count": 0
    },
    {
        "id": 4,
        "title": "first postddddd",
        "image": null,
        "user_id": 1,
        "body": "the body of the postddd",
        "created_at": "2021-02-08T07:49:59.000000Z",
        "likes_count": 0,
        "comments_count": 0
    },
    {
        "id": 5,
        "title": "facebook",
        "image": "http:\/\/blog.test\/blogs\/1612771779.jpg",
        "user_id": 1,
        "body": "the body of thefacebook",
        "created_at": "2021-02-08T07:57:27.000000Z",
        "likes_count": 0,
        "comments_count": 1
    }
]
```
<div id="execution-results-GETapi-blog-posts-all" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-blog-posts-all"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-blog-posts-all"></code></pre>
</div>
<div id="execution-error-GETapi-blog-posts-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-blog-posts-all"></code></pre>
</div>
<form id="form-GETapi-blog-posts-all" data-method="GET" data-path="api/blog-posts/all" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-blog-posts-all', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-blog-posts-all" onclick="tryItOut('GETapi-blog-posts-all');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-blog-posts-all" onclick="cancelTryOut('GETapi-blog-posts-all');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-blog-posts-all" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/blog-posts/all</code></b>
</p>
<p>
<label id="auth-GETapi-blog-posts-all" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-blog-posts-all" data-component="header"></label>
</p>
</form>


## View user BlogPosts.

<small class="badge badge-darkred">requires authentication</small>

This endpoint allows you to view all Posts By a User.

> Example request:

```bash
curl -X GET \
    -G "http://blog.test/api/blog-posts" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://blog.test/api/blog-posts"
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
<div id="execution-results-GETapi-blog-posts" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-blog-posts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-blog-posts"></code></pre>
</div>
<div id="execution-error-GETapi-blog-posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-blog-posts"></code></pre>
</div>
<form id="form-GETapi-blog-posts" data-method="GET" data-path="api/blog-posts" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-blog-posts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-blog-posts" onclick="tryItOut('GETapi-blog-posts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-blog-posts" onclick="cancelTryOut('GETapi-blog-posts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-blog-posts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/blog-posts</code></b>
</p>
<p>
<label id="auth-GETapi-blog-posts" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-blog-posts" data-component="header"></label>
</p>
</form>


## Create a New Blog Post.


This endpoint lets you create a New Post.

> Example request:

```bash
curl -X POST \
    "http://blog.test/api/blog-posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"Title 1","body":"et","image":"autem"}'

```

```javascript
const url = new URL(
    "http://blog.test/api/blog-posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Title 1",
    "body": "et",
    "image": "autem"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-blog-posts" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-blog-posts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-blog-posts"></code></pre>
</div>
<div id="execution-error-POSTapi-blog-posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-blog-posts"></code></pre>
</div>
<form id="form-POSTapi-blog-posts" data-method="POST" data-path="api/blog-posts" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-blog-posts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-blog-posts" onclick="tryItOut('POSTapi-blog-posts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-blog-posts" onclick="cancelTryOut('POSTapi-blog-posts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-blog-posts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/blog-posts</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-blog-posts" data-component="body" required  hidden>
<br>
The title of the Post.</p>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="POSTapi-blog-posts" data-component="body" required  hidden>
<br>
The body of the Post.</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>image</small>     <i>optional</i> &nbsp;
<input type="text" name="image" data-endpoint="POSTapi-blog-posts" data-component="body"  hidden>
<br>
Blog Post Image.</p>

</form>


## View  BlogPost.

<small class="badge badge-darkred">requires authentication</small>

This endpoint allows you to view a Specific Post by its Id.

> Example request:

```bash
curl -X GET \
    -G "http://blog.test/api/blog-posts/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://blog.test/api/blog-posts/1"
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
<div id="execution-results-GETapi-blog-posts--blogPost-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-blog-posts--blogPost-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-blog-posts--blogPost-"></code></pre>
</div>
<div id="execution-error-GETapi-blog-posts--blogPost-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-blog-posts--blogPost-"></code></pre>
</div>
<form id="form-GETapi-blog-posts--blogPost-" data-method="GET" data-path="api/blog-posts/{blogPost}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-blog-posts--blogPost-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-blog-posts--blogPost-" onclick="tryItOut('GETapi-blog-posts--blogPost-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-blog-posts--blogPost-" onclick="cancelTryOut('GETapi-blog-posts--blogPost-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-blog-posts--blogPost-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/blog-posts/{blogPost}</code></b>
</p>
<p>
<label id="auth-GETapi-blog-posts--blogPost-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-blog-posts--blogPost-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>blogPost</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="blogPost" data-endpoint="GETapi-blog-posts--blogPost-" data-component="url" required  hidden>
<br>
The id of the Post.</p>
</form>


## Update Blog Post.

<small class="badge badge-darkred">requires authentication</small>

This endpoint lets you update blog Post by Its Id

> Example request:

```bash
curl -X PUT \
    "http://blog.test/api/blog-posts/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"Title 1","body":"excepturi","image":"accusamus"}'

```

```javascript
const url = new URL(
    "http://blog.test/api/blog-posts/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Title 1",
    "body": "excepturi",
    "image": "accusamus"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-blog-posts--blogPost-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-blog-posts--blogPost-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-blog-posts--blogPost-"></code></pre>
</div>
<div id="execution-error-PUTapi-blog-posts--blogPost-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-blog-posts--blogPost-"></code></pre>
</div>
<form id="form-PUTapi-blog-posts--blogPost-" data-method="PUT" data-path="api/blog-posts/{blogPost}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-blog-posts--blogPost-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-blog-posts--blogPost-" onclick="tryItOut('PUTapi-blog-posts--blogPost-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-blog-posts--blogPost-" onclick="cancelTryOut('PUTapi-blog-posts--blogPost-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-blog-posts--blogPost-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/blog-posts/{blogPost}</code></b>
</p>
<p>
<label id="auth-PUTapi-blog-posts--blogPost-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-blog-posts--blogPost-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>blogPost</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="blogPost" data-endpoint="PUTapi-blog-posts--blogPost-" data-component="url" required  hidden>
<br>
The id of the Post.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-blog-posts--blogPost-" data-component="body" required  hidden>
<br>
The title of the Post.</p>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="PUTapi-blog-posts--blogPost-" data-component="body" required  hidden>
<br>
The body of the Post.</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>image</small>     <i>optional</i> &nbsp;
<input type="text" name="image" data-endpoint="PUTapi-blog-posts--blogPost-" data-component="body"  hidden>
<br>
Blog Post Image.</p>

</form>


## Delete Blog Post.

<small class="badge badge-darkred">requires authentication</small>

This endpoint lets you Delete Blog Post by its Id

> Example request:

```bash
curl -X DELETE \
    "http://blog.test/api/blog-posts/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://blog.test/api/blog-posts/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-blog-posts--blogPost-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-blog-posts--blogPost-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-blog-posts--blogPost-"></code></pre>
</div>
<div id="execution-error-DELETEapi-blog-posts--blogPost-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-blog-posts--blogPost-"></code></pre>
</div>
<form id="form-DELETEapi-blog-posts--blogPost-" data-method="DELETE" data-path="api/blog-posts/{blogPost}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-blog-posts--blogPost-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-blog-posts--blogPost-" onclick="tryItOut('DELETEapi-blog-posts--blogPost-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-blog-posts--blogPost-" onclick="cancelTryOut('DELETEapi-blog-posts--blogPost-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-blog-posts--blogPost-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/blog-posts/{blogPost}</code></b>
</p>
<p>
<label id="auth-DELETEapi-blog-posts--blogPost-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-blog-posts--blogPost-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>blogPost</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="blogPost" data-endpoint="DELETEapi-blog-posts--blogPost-" data-component="url" required  hidden>
<br>
The id of the Post.</p>
</form>



