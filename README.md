PROJECT DOCUMENTATION.

CODE DOCUMENTATION.

1.bioData.php 
This code connects to a database, retrieves all records from the bio_data table, and outputs the data as a JSON-encoded string. If the query fails, it outputs an error message.

2.composer.json
This file specifies the dependencies required for the PHP project. In this case, it specifies supabase.

3.composer.lock
The composer.lock file locks the dependencies to specific versions to ensure consistency across installations.Dependencies are external libraries or packages that the project requires to function properly.To lock in the dependencies means that the exact versions of each dependency are recorded.This ensures that every time the project is installed or updated,the same versions of the dependencies are used, providing consistency across different environments and avoiding potential issues caused by version differences. Examples of dependencies used here are:bayfrontmedia/php-mime-type- a library to detect the appropriate MIME type of a file based on its extension,graham-campbell/result-type-library for implementing the Result type and guzzlehttp/guzzle-PHP HTTP client library.etc

4.config.php
This is a php script that connects to a PostgreSQL database and fetch all records from the bio_data table, outputting the result in JSON format.PostgreSQL is used here solely because it supports SQL and JSON querying. The commented-out code is an alternative method for connecting and querying data using Supabase. Supabase is a backend-as-a-service platform that provides a range of tools to help developers build applications faster.

5.databaseSearch.php
This is a PHP script that performs a search query  to retrieve records from  the bio-data table in the database and returns the results in JSON format.


7.index.html
This HTML file creates a structured webpage with a head and body.The head section contains contains meta information about the document, including character set, viewport settings, title, logo and external stylesheets.The body has four sections:the header section fixed with a dropdown menu for navigation,the main section containing an introductory description,a button, and an image,the main content section containing information about the website's purpose, benefits, data validity complete with images and cards and lastly the footer section which has the message powered by google.

8.tribute.css
This file contains several user interface elements and components styling.This includes Resettng padding, margin and setting box-size to border-box for all elements,setting the body to hide horizontal overflow and gives it a whitesmoke background color,Hiding the scrollbar for the body,styles for a loading screen with a rotating loader animation,styles for the navigation menu and dropdown elements, including hover effects,styles for the search section, including input and submit buttons,styles for popup containers, including animations and exit button and adjust styles for different screen sizes to ensure the page is responsive and looks good on various devices.

9.tribute.html
This file contains a head section and a body section containing a javascript section that Initializes loaders and hides them once the page is fully loaded it also adds an event listener to the submit button for searching the database and displaying the results in a popup,Additional functions such as The checkOnline function that fetches information from an external API if no results are found in the local database and displays the fetched information in a popup if available.The  fetch function fetches data from the  bioData.php  and dynamically creates elements to display the fetched data it also adds event listeners to the "View More" buttons to display detailed information in a popup.

10.tribute.php
This tribute.php script reads JSON format input data, checks for the existence of optional fields, interacts with a MySQL database to check for existing records, and inserts new records if necessary.


