Initiative 2.0 Berliner Schulen OpenData Project
=======================

This project will become an application to visualize information about the schools in Berlin, which is available openly.

## Setup
This guide assumes one has a typical LAMP or XAMPP stack.
You need to create a database for this application, e.g. schooldata. The database connection needs to be configured in the file /app/Config/database.php (PDO has to be installed).

To fill the database with the required structure you need to be able to execute the CakePHP console application. Therefore php-cli has to be on your PATH variable. Open a terminal and navigate to the folder where the application is stored and go into the ./app folder. The following command has to be run:

```
cake Migrations.migration run all
```

Now you should be able to use the basic CRUD interfaces by accessing the url /admin/schools

## Importing basic school data
To import some basic data from the dataset you have to create a CSV file from the Excel sheet that is available. You should use OpenOffice/LibreOffice calc for the conversion, since there it's easy to configure the export options. The file that can be found in the Drive folder has a few issues (e.g. multilines), these have to be fixed manually in the CSV file (I'll provide a fixed version later).

With the cleaned CSV file you navigate to /admin/schools/import and upload the file. The data should then be imported and no error message should be presented (otherwise the CSV file is probably not 100% correct).
