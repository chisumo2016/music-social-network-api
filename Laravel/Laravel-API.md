#### Laravel installation | Laravel API
    - Objectives of this application is to build 
    - Install the Laravel Application
        laravel new music-social-network-api    
    - We gonna use an API tool called POSTMAN.

## Laravel Sanctum AuthController with Bearer Token
    - Objective is to create a AuthController, which consists of 
            Login Method
            Register Method
            Logout Method
    - Once use has been regisster - generate token -> Sanctum
    - Sanctum is already installed 
    - Create a AuthController inside a API folder
            php artisan make:controller API/AuthController 

    - Create a register method inside the Authcontroller, implement the logic to create a token
    - We use the user variable to ccreate a token
    - Create an api routes  
    - Modified slightly the user migration tablee
    - Modified slightly  in User Model 
    - Open the POSTMAN
           POST:  http://music-social-network-api.test/api/register
            Generate the api token.
            Copy API Token  and create a new request called inside-middlware
                save the token into Bearer Token
    - Implement the login functionality inside the AuthController
    - Implement the logout functionality inside the AuthController

## Laravel Validation in Auth Controller
    - Sample https://github.com/laravel/laravel/blob/5.5/app/Http/Controllers/Auth/RegisterController.php
    - Validation to our request 
              php artisan make:request Auth/RegisterRequest
              php artisan make:request Auth/LoginRequest
              php artisan make:request Auth/LogoutRequest
    - Implement the validation logic to each of request
    - Import all request inside the AuthController
    TEST API PASSED
       POST : http://music-social-network-api.test/api/register
       POST : http://music-social-network-api.test/api/login
       POST : http://music-social-network-api.test/api/logout

## Laravel Sanctum with User Controller
    - Objective is to create the  resource for UserController
    - Create a UserController  Resource
            php artisan make:controller API/userController --resource
    - Create a UpdateUserRequest via terminal
            php artisan make:request User/UpdateUserRequest
    - Add the routes in api file for show and update users
    - TEST WITH POSTMAN
        Update the user with laravel sanctumtoken
        Show the user with token

## Laravel Sanctum with Vue 3 and Axios to login
    - Objective is to hook the frontend with backend 
    - Hook with the front end social media network.

     PLEASE CROSSS CHECK WITH BACKEND NOTES 
    - php artisan migaret:reset 
    - Add a new column to existing users migrations
            php artisan make:migration add_description_to_users_table --table=users 
            $table->integer('paid')->after('whichever_column');

## Laravel Intervention Image Tutorial (Laravel file Upload)
    - The objectives of this topic is to be able to upload our image to our Edit Page .
    - Let us make our image Service
    - Let us open the laravel backend .
    - app -> create a folder called Services (app/Services/ImageService.php)
    - Install the Laravel Intervention Package
        https://image.intervention.io/v2/introduction/installation#integration-in-laravel
             composer require intervention/image
    - Write all logic to create an image inside the ImageService class
    - To user the  Image Service Open the user Controller in update()
        add the if(){}
    - Just back to our front end application

## Profile Info with Pinia and Vue
    - Objective is to make our profile functional for one user.
    - Open the ProfileSection.vue file, display all the informarion on the screen
    - Add the logic to both part to display infoormation ProfileSection.vue and ProfileAboutSSection

### Laravel File Upload with Vue 3 | Axios | Add Song
    - Objective for this section is to be able to add the Songs
    - Functionality to send a request to backend(laravel) via store method.
    - We can get songs by user_id as column
    -Add the Validation
    -State Management to store song
    - Has on the backend of Song we  need to generate model, migration ,  and controller
    - Create a Model , Migration , controller and resource for our songs
        php artisan make:model Song -mc --resource 
    - Add data modelling inside the migration
        php artisan migrate  
    - Put the SongController inside the API 
    - Add Mass Assigment on Song Model
    - Upload the MP3 files as upload  via store() method
    - Make a customs request validation for our song
        php artisan make:request Song/StoreSongRequest 
    - Add the functionality to delete the song
    - Add the api point in api route file (two api route)
    - Add a new folder Songs in public

       FRONT END VUE 
    - Jump to front end of VUE Application
    - Add the SweetAlert
        https://sweetalert2.github.io/#download
         ??? npm  install sweetalert2  
    - Duplicate axios.js file call sweetaler2
    - Copy the import from sweetalert2 doc
    - Open AddSong.vue file and implemennt all the logic
    - Add button will upload the file into public folder to ouur backend.
    - TEST THE APPLICATION - PASSED
    - BUT Sweet alert didnt work

##  Get MP3 Files from Laravel API | Pinia
    - Objective is to get the MP3 file songs by user id 
    - We gonn use the Pinia Store  and stores the song on
    - Make a controller in backend API/SongssByUserController
        php artisan make:controller API/SongssByUserController --resource
        Only one method is needed index(){}
        Implement the logic into index(){} method
    - Api the routes for song by user id
        FRONT END
    - Jump into Front End.
    - Go and  make another store, duplicate the user-store.js file 
    - Call it song-store.js and add the logic into script
    - Go to AddSong.vue Files  and implement the useSongStore
    - TEST THE APPLICATION - PASSED 
    - Open google -application  - All song by id
    - Open SongsSection.vue file  do we can output /loop the songs
    - Open SongPlaye.vue file  do we can output /loop the songs
            add all the logic to loop the songs
        - Save all the image into backend and user pini to show it
    - TEST THE APPLICATION BY ADD NEW SONG  PASSED

### Delete MP3 File from Laravel API and Install SweetAlert2 in Vue 3
    - Objective is to delete the Song from the database and show the SweetAlerts
    - Go to backend  and add the logic to delete (){} in SongController
            Add all logics 
    - Add the API route to delete the songs
    - Open FRONT END Application
    - Open the DeleteSongs vue file

        * Put all logic into script 
    - Loop the in file v-for=""
    - add the useUserStore
    - Add the sweeetAlert2
    - TEST APPLICATION: PASSES
    - Let Go back to AddSong vvue file
        add the redirect to accout-profile
    - Open the SongPlayer ,take the thePlayer() and putt after for loop

### Video save with Vue 3, Pinia, and Laravel API
    - Objective is to be able to Save the vide into data base vvia Laravel API and Pinia.
    - Functionality to send a request to backend(laravel) via store method.
    - We can get songs by user_id as column
    -Add the Validation
    -State Management to store video
    - Has on the backend of Video we  need to generate model, migration ,  and controller
    - Create a Model , Migration , controller and resource for our songs
        php artisan make:model Video -mc --resource 
    - Add data modelling inside the migration
        php artisan migrate  
    - Put the VideoController inside the API 
    - Add the route for youtube
    - Make a customs request validation for our Youtube
        php artisan make:request Song/StoreSongRequest 
    - Add the Mass Assigment 
    - Implement three login inssidee video controller
    - Create a env("YT_EMBED_URL") in .env
    - Finish all logic to implement on VideoController
    - TEST THE APPPLICATION VIA POSTMAN
    - MOVE TO FRONT APPLICATION VUE

## Vue 3 and Laravel API CRUD | Laravel CRUD | Posts Section
    - Objectives of this section is to be able to CRUD the Post
    - Create a Model , Migration , controller and resource for our songs
        php artisan make:model Post -mc --resource 
    - Put the VideoController inside the API 
    -Add the Validation request 
        php artissan make:request Post/StorePostRequest      
        php artisan make:request Post/UpdatePostRequest 
    - Add data modelling inside the migration
        php artisan migrate:rollback
        php artisan migrate
    - Inject into PostController in both store and update method
    - Setup the relationship
    - Add the Mass Assigment 
    - Implement all logic for both methods
    - Add the api route for posts
     REMEMBER: IMAGE GET SAVED FIRST FOLLOWED OTHER FIELD
      FINISH THE BACKEND 

## Get and Delete with Vue 3 and Laravel API | Vue CLI | Pinia
    - The objective of this lesson is to get individual post by Id and delete the record.
    - Add the endpoint to backend of LAravel  
    - Create a Controller in  backend of LAravel (API/PostByUserController)
        php artisan make:controller API/PostByUserController --resource 
        Delete everything except show method
        Add the api route
    - Jump into Front end.
    - In front end we gonna use the Pinia store to loop all the posts by user id in PostSection.vue
    - Open the PostSection.vue file## Get and Delete with Vue 3 and Laravel API | Vue CLI | Pinia
    - The objective of this lesson is to get individual post by Id and delete the record.
    - Add the endpoint to backend of LAravel  
    - Create a Controller in  backend of LAravel (API/PostByUserController)
        php artisan make:controller API/PostByUserController --resource 
        Delete everything except show method
        Add the api route
    - Jump into Front end.
    - In front end we gonna use the Pinia store to loop all the posts by user id in PostSection.vue
    - Open the PostSection.vue file
        Import all the post by user_id from our Pinia Store
    - Copy the Video-store.js , duplicate and call post-store.js
       Adjust some logic based of file
    - Open the CreatePost.vue file , import  usePostStore and use the variable  postStore to 
       fetch post by userId (fetchPostsByUserId)
    - Open the PostsSections.vue file and import usePostStore and loop through all our posts
    - Attach our image in the Pinia store in order to show our image, open post-store.js
     add the method postImage(){}  implemente the logic
    - Open the PostsSSection.vue file import the method to display the imag.
    - TEST APPLICATION: Image doesn't work
    - Implement the Delete functionality on the Post
    - Copy the code from DeleteYoutube.vue file

## Build a Pinia Store in Vue 3 with Tailwind CSS | Profile Section
    - The objective of this lesson is to make our application to use Multi user rather than single user.
    - We gonna makee the Pinia store and change some logic
    - We gonna duplicate the 
    











