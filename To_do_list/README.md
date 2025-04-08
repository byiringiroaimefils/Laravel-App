# Todo List Web Application

A simple Todo List web application built with Laravel that allows users to manage their tasks through basic CRUD operations.

## Features

- Create new tasks
- View list of all tasks
- Update existing tasks 
- Delete tasks
- Input validation for task names (minimum 3 characters)
- Confirmation dialogs for update and delete operations

## Technical Details

### Backend
- Built with Laravel PHP framework
- Uses MySQL database with a 'todos' table
- MVC architecture implementation
- RESTful routing

### Frontend
- Blade templating engine
- Basic HTML forms
- CSRF protection enabled

### Database Structure

**todos table**
- id (primary key)
- task_name (string)
- timestamps (created_at, updated_at)

### Key Components

1. **Models**
   - Todo.php: Handles database interactions for tasks

2. **Controllers** 
   - TodoController.php: Contains logic for CRUD operations

3. **Views**
   - index.blade.php: Main task listing and creation page
   - show_update.blade.php: Task update form

## Routes

- GET `/` - Display all tasks
- POST `/store` - Create new task
- GET `/edit/{id}` - Show update form
- PUT `/update/{id}` - Update existing task
- DELETE `/delete/{id}` - Delete task

## Setup Instructions

1. Clone the repository
2. Install dependencies: `composer install`
3. Configure database settings in `.env`
4. Run migrations: `php artisan migrate`
5. Start the development server: `php artisan serve`
