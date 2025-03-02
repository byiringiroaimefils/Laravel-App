# Laravel Learning

This repository contains two Laravel applications: `blog_post` and `user_login_register`. Each application is structured to demonstrate different features and functionalities of the Laravel framework.

## Applications

### Blog Post Application

A simple blog application that demonstrates CRUD operations for managing blog posts.

#### Features

- Create new blog posts
- View all posts with pagination
- Edit existing posts
- Delete posts
- Form validation
- Flash messages for user feedback
- Responsive design

#### Routes

- `GET /` - Redirects to posts index
- `GET /posts` - Display all posts
- `GET /posts/create` - Show create post form
- `POST /posts` - Store a new post
- `GET /posts/{post}/edit` - Show edit form
- `PUT /posts/{post}` - Update post
- `DELETE /posts/{post}` - Delete post

#### Database Schema

The posts table contains the following fields:

```php
Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('content');
    $table->timestamps();
});
```

#### Project Structure

### User Login and Registration Application

A user authentication application that demonstrates user login, registration, and profile management.

#### Database Schema

The users table contains the following fields:

```php
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->rememberToken();
    $table->timestamps();
});
```

#### Project Structure

```markdown
user_login_register/
├── app
│   └── Http
│       └── Controllers
│           └── AuthController.php    # Handles authentication operations
├── database
│   └── migrations
│       └── create_users_table.php    # Database schema for users
├── resources
│   └── views
│       ├── auth
│       │   ├── login.blade.php       # Login form
│       │   ├── register.blade.php    # Registration form
│       │   ├── password.blade.php    # Password reset form
│       └── profile
│           └── edit.blade.php        # Profile edit form
└── routes
    └── web.php                       # Route definitions
```
