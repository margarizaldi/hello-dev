## Coding Test

Clone and setup the project.

## Task 1
- Make a good strategy so that all controllers can return consistent structure of json responses following this structure:
    ```json
    {
        "message": "string",
        "data": [],
        "errors": []
    }
    ```
- Implement the strategy in `App\Http\Controllers\UserController` class.
- Visit random endpoint, e.g.: `/api/foo` in your browser, change the 404 html response into a `json` response using the same structure.

## Task 2
We have `Shop` & `Product` models.
- Define their relationships to each other and the `User`, adjust the migrations if needed.
- [T1] Every newly created User will automatically have a `Shop`, by default, the shop name will be `"{$user->name} Shop"`.
- [T2] Every user may have up to 3 shops.
- Make tests for T1 and T2.

## Task 3
- The Shop owner will be able to invite other users to the shop, you are free to build the feature.

[< Back](../README.md)
