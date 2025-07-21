# test-task-21-07

Приложение использует простую JWT-авторизацию с одним короткоживущем access_token (1 час). Имеется три endpoint-а:

1) POST /api/registration - Создание нового пользователя
2) POST /api/login - Получение access_token
3) GET /api/profile - Получение профиля (инфо о юзере действующий access_token которого был передан в заголовке Authorization)
