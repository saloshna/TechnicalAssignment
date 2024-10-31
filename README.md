I designed and implemented a RESTful Web Service (Web API) in PHP to provide detailed information about books. This API delivers data such as book title, authors, publication year, description, language, ISBN, reviews, category, and bestseller status in JSON format. Data is stored in a MySQL database named “bookstore,” which includes a “book” table that organizes the essential book details.

Development and Tools:

IDE: Visual Studio Code was used for API development.
Database: MySQL to manage and retrieve book data efficiently.
Local Server: XAMPP to run Apache and MySQL locally, enabling testing of the API.

How to Run the Web API:

Copy the project folder (bookstore) to the htdocs directory within the XAMPP installation. For example, C:\xampp\htdocs.
Open the XAMPP Control Panel and start the Apache and MySQL modules.
In a web browser, navigate to :localhost/bookstore/index.html to access the API.
