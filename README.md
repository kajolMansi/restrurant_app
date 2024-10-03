Project name: Restrurant website

Backend work: contact form and  booking table

Project Structure:

/project-root
│
├── app                  # Contains the application logic
│   ├── Http
│   │   ├── Controllers  # Controllers for handling requests
│   │   └── Middleware    # Middleware for request handling
│   ├── Models           # Eloquent models
│   └── Services         # Business logic services
│
├── config               # Configuration files
│
├── database             # Database-related files
│   ├── migrations       # Migration files for database schema
│   └── seeders          # Seeder files for populating database
│
├── resources            # Resources like views and assets
│   ├── views            # Blade templates
│   ├── css              # CSS stylesheets
│   └── js               # JavaScript files
│
├── routes               # Application routes
│
├── tests                # Tests for the application
│
├── .env                 # Environment configuration
├── composer.json        # PHP dependencies
└── README.md            # Project documentation


Technologies Used
Backend:

PHP
Laravel (version 11)
MySQL

Frontend:

HTML
CSS
JavaScript
Bootstrap (for responsive design)

Development Tools:

Composer (for dependency management)


Challenges Faced:

Datetime Formatting: Handling datetime formats between user input and database storage caused several errors initially, requiring additional validation and formatting using the Carbon library.

Attached Database file