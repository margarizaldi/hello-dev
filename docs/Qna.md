## QnA

1. Describe the request lifecycle in Laravel from the moment a request is made to the point a response is sent back to the client
2. How does Laravel's service container work, and how would you use dependency injection within a controller?
3. Let's say we have User, Post, and Comment models, and we need to frequently access comments (count, list, etc.) from a user, which one do you prefer and why?:
    - Add `user_id` fk to `comments` table and use `HasMany` relationship
    - or using `HasManyThrough` relationship
4. How will you evaluate slow queries to fix?
5. What is the best strategy for you to monitor and track errors in production environment?

[< Back](../README.md)
