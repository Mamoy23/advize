# Requirements

- PHP 7x
- Laravel
- MySQL 
- Node
- npm

# Installation

In node_api/ execute the following command line : 

```bash
npm install
```

# Configuration

## Database configuration

Please set up your local credentials for MYSQL Connection in /node_api/config/db.config.js

```
module.exports = {
    HOST: "localhost",
    USER: "******",
    PASSWORD: "******",
    DB: "test_advize"
  };
```

## Database creation

For create MySQL database and associated tables, please run the following command line in node_api/config/ : 

```
node db.create.js
```

Make sure you accomplish well previous step for database configuration.

# Usage
Run the API, in node_api/ : 
```
node index.js
```

Run the client, in laravel_client/ : 
```
php artisan serve
```

## Routes

Index route : http://localhost:8000
Main route : http://localhost:8000/users