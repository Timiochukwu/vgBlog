
## About Server



# Blog API

This is a simple CRUD API for managing blogs and posts, built with Laravel.

## Requirements

- PHP 8.1+
- nginx/1.18.0 (Ubuntu)
- Composer
- Laravel 10+
- NGINX SERVER
- MySQL (or any other supported database)
- Postman (for testing the API endpoints)

## Installation

1. **Clone the repository**:
   
   git clone  https://github.com/Timiochukwu/vgBlog.git
   
## API Endpoints
 2.  



API Endpoints
Authentication
Register a User

Method: POST
Endpoint: /api/register
Request Body: { "name": "User Name", "email": "user@example.com", "password": "password" }
Headers: None
Login a User

Method: POST
Endpoint: /api/login
Request Body: { "email": "user@example.com", "password": "password" }
Headers: None
Blog Endpoints
View All Blogs

Method: GET
Endpoint: /api/blogs
Headers: Authorization: vg@123
Create Blog

Method: POST
Endpoint: /api/blogs
Request Body: { "title": "Blog Title", "description": "Blog Description" }
Headers: Authorization: vg@123
Show Blog

Method: GET
Endpoint: /api/blogs/{id}
Headers: Authorization: vg@123
Update Blog

Method: PUT
Endpoint: /api/blogs/{id}
Request Body: { "title": "Updated Title", "description": "Updated Description" }
Headers: Authorization: vg@123
Delete Blog

Method: DELETE
Endpoint: /api/blogs/{id}
Headers: Authorization: vg@123
Post Endpoints
View All Posts under a Blog

Method: GET
Endpoint: /api/blogs/{blogId}/posts
Headers: Authorization: vg@123
Create Post under a Blog

Method: POST
Endpoint: /api/blogs/{blogId}/posts
Request Body: { "title": "Post Title", "content": "Post Content" }
Headers: Authorization: vg@123
Show Post

Method: GET
Endpoint: /api/posts/{id}
Headers: Authorization: vg@123
Update Post

Method: PUT
Endpoint: /api/posts/{id}
Request Body: { "title": "Updated Title", "content": "Updated Content" }
Headers: Authorization: vg@123
Delete Post

Method: DELETE
Endpoint: /api/posts/{id}
Headers: Authorization: vg@123
Interaction Endpoints
Like a Post

Method: POST
Endpoint: /api/posts/{id}/like
Headers: Authorization: vg@123
Comment on a Post

Method: POST
Endpoint: /api/posts/{id}/comments
Request Body: { "comment": "Your comment here" }
Headers: Authorization: vg@123
Testing with Postman
Import Postman Collection

Open Postman.
Go to "File" -> "Import".
Select the JSON file with the predefined endpoints and import it.
Run Requests

Open the imported collection.
Set the Authorization header with the value vg@123 for each request.
Test the API endpoints as needed.
Troubleshooting
"Not Found" Error: Ensure the URL is correct and the routes are properly defined in routes/api.php.
"Unauthorized" Error: Check if the token is correctly passed in the Authorization header.