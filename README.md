Built using:

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

and 

<p align="center"><a href="https://vuejs.org" target="_blank"><img src="https://raw.githubusercontent.com/vuejs/art/master/logo.svg" height="100"></a></p>



## Getting Started

- Clone the project
- Run `composer install`
- Run `npm install && npm run dev` if needed
- Modify env. variables accordingly
- Run `php artisan migrate`
- Run `php artisan serve`
- Voilà! Should be running on port `8000` if all went well.


## Possible Failures and Areas of Improvement

### Qn 2
- Database Constraints such as non-nullable data isn't enforced. We would remove nullables for the columns that require data.
- Data validation for the CSV data is non-existent. For instance, does the scenario allow for negative quantity?
- Proper database structure isn't followed. For instance, CustomerID and Country could be made into relationships in real world data.

1. The data could also be uploaded in compressed format for faster, more efficient upload; the con of this is on the server side, a process to extract the data would have to be catered for.
2. The data could also be uploaded in chunks by processing the csv client side.
3. An increase in php's max increase time would be required to handle the large file
4. Alternatively, we could create a process/job that keeps updating the database with the row number(status) while saving the data, that way the app can pick up where it left off on case of any failures.

### Qn 1
- For the marvel characters, improvements could be made by adding a store (vuex) with persistent data for better caching and data management.
- Adding pagination and maybe infinite scrolling for the data.

## To note:

- The marvel api seems to completely refuse to accept client calls from localhost even when whitelisted in my account.
- I therefore had a slight workaround and used static data but still had logic that would call the api, get data and process it accordingly.

