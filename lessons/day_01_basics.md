# Day 1: The First Breath (Hello World & Environment Check)

Welcome to Day 1, kid! Today we're just making sure everything is talking to each other. In the professional world, this is half the battle.

## 🛠 Setup Check
I've already created a `docker-compose.yml` for you. This tells Docker to spin up a container with the latest PHP installed so we don't have to mess with your system settings.

**Your Task:**
1. Open your terminal in this directory.
2. Run this command: `docker compose up -d`
   *This starts the engine in the background.*
3. Verify it's running by typing: `docker compose ps`

## 🏁 The First Script
Create a file named `index.php` in this root directory and paste this inside:

```php
<?php

echo "I am the Director. My 2nd Brain is online.\n";
echo "PHP version: " . PHP_VERSION . "\n";
```

## 🚀 Running your code
Since we're using Docker, you can run your script through the container:
`docker compose exec php php index.php`

---

## 🧠 Brain Dump (Hippocampus)
Once you see that output, take a moment to look at the syntax. 
- Why does it start with `<?php`?
- What do you think the `.` does in that second echo line?

Drop your answers or any confusion into `.project_brain/hippocampus/buffer.md`. I'll be watching!
