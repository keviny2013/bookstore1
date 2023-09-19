## Book Store

**To set up a Book Store application, here are some steps below:**

**Step 1:**  
Copy All Files OR Code and paste to the root folder (public\_html)

**Step 2:**  
Now, create or set .htaacess file in the root folder (public\_html)

**Step 3:**  
This step is mendetory for to System configuration.

Run Composer command to install Vendor Folder as Below:
```plaintext
composer install
```

**Step 4:**  
Next, For Setup Database credential in index.php file in the root directory

Here is the sample code:

```plaintext
define('DB_HOST', 'localhost');
define('DB_PASSWORD', 'PASSWORD');
define('DB_UNAME', 'USERNAME');
define('DB_NAME', 'DATABASE NAME');
```

In the above code, just replace the variables with your variables

**Step 5:**  
After defining database credentials, now open your website's URL

**Step 6:**  
The login Page will show and Login with your Username & Password.
