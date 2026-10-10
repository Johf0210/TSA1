# Tasks for Today Management System

This is an IT0049 TSA1 CodeIgniter 4 application. It demonstrates MVC structure, MySQL models, Query Builder filtering, and four separate views that share a database layer.

## Pages

- `/` — Welcome page showing only tasks scheduled for the current date
- `/tasks` — complete task list ordered by date
- `/profile` — one demo user record
- `/about` — static developer and project information

## Setup

1. Install PHP 8.0 or newer, Composer, MySQL, and a local web server.
2. Create a standard CodeIgniter app with `composer create-project codeigniter4/appstarter tasks-today`.
3. Copy this project's `app` and `public/assets` folders into the generated project.
4. Copy `.env.example` to `.env` in the generated project's root folder.
5. Replace the developer name and email in `database/schema.sql` before importing it.
6. Run `database/schema.sql` in MySQL.
7. Update the database values in `.env` if needed.
8. Run `php spark serve`.
9. Open `http://localhost:8080/` and test all four routes.

The Welcome page filters tasks using the current date. The database seed contains records for October 8, 9, 10, and 11, 2026; update the seed date if testing on another date so that at least one task matches today's date.
