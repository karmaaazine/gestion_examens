<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gestion des Examens</title>
    <style>
        /* Global styles */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    color: #333;
}

/* Dashboard layout */
.dashboard {
    display: flex;
    height: 100vh;
}

/* Sidebar */
.sidebar {
    width: 250px;
    background-color: #2c3e50;
    color: white;
    padding: 20px;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin: 15px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.sidebar ul li a:hover {
    background-color: #34495e;
}

/* Main content */
.main-content {
    flex: 1;
    padding: 20px;
    background-color: #ecf0f1;
}

header h1 {
    margin: 0;
    font-size: 24px;
}

/* Cards */
.content {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.card {
    flex: 1;
    background-color: white;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
}
</style>
</head>
<body>
<div class="dashboard">
        <aside class="sidebar">
            <h2>Dashboard</h2>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <header>
                <h1>Welcome to the Dashboard</h1>
            </header>
            <section class="content">
                <div class="card">Card 1</div>
                <div class="card">Card 2</div>
                <div class="card">Card 3</div>
            </section>
        </main>
    </div>
</body>
</html>