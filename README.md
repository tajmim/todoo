Document of API endpoints ::


1..
Get All Tasks
URL: /api
Method: GET
Response: 200 OK

 {
        "id": 1,
        "title": "Task Title",
        "description": "Task Description",
        "is_completed": false,
        "created_at": "2024-05-22T09:35:22.000000Z",
        "updated_at": "2024-05-22T09:35:22.000000Z"
    }

2..
Create Task
URL: /api/create
Method: POST
Request:

{
    "title": "Task Title",
    "description": "Task Description",
    "is_completed": false
}

Response: 201 Created
{
    "message": "Task created successfully",
    "task": {
        "id": 1,
        "title": "Task Title",
        "description": "Task Description",
        "is_completed": false,
        "created_at": "2024-05-22T09:35:22.000000Z",
        "updated_at": "2024-05-22T09:35:22.000000Z"
    }
}

3..
Get Task by ID
URL: /api/show/{id}
Method: GET
Response: 200 OK
{
    "id": 1,
    "title": "Task Title",
    "description": "Task Description",
    "is_completed": false,
    "created_at": "2024-05-22T09:35:22.000000Z",
    "updated_at": "2024-05-22T09:35:22.000000Z"
}

4..
Update Task
URL: /api/update/{id}
Method: POST
Request:
{
    "title": "Updated Task Title",
    "description": "Updated Task Description",
    "is_completed": true
}
Response: 200 OK

{
    "id": 1,
    "title": "Updated Task Title",
    "description": "Updated Task Description",
    "is_completed": true,
    "created_at": "2024-05-22T09:35:22.000000Z",
    "updated_at": "2024-05-22T09:35:22.000000Z"
}

5..
Delete Task

URL: /api/delete/{id}
Method: DELETE
Response: 204 No Content

