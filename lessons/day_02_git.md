# Day 2: Git for the Director (The Professional Time Machine)

Welcome to Day 2, Director. Today, we leave "hobbyist" coding behind and adopt the workflow of a professional Software Engineer.

## 🕰️ Why Git?
Imagine you spend 4 hours building a complex login system. You make one small change, and suddenly *everything* stops working. You can't remember what you changed.
- **Without Git**: You panic. You try to "undo" until your fingers hurt. You might have to start over.
- **With Git**: You type one command, and your code travels back in time to the last "Safe Point" (Commit).

## 🛠️ The Core Commands (Your new best friends)

1.  **`git status`**: The "Map." It tells you which files have changed and what Git is tracking.
2.  **`git add .`**: The "Staging Area." This tells Git: "I want to save everything I've done so far."
3.  **`git commit -m "Your Message"`**: The "Save Point." This creates a permanent snapshot in history.

---

## 🏁 Your Task: The First "Career Commit"

I have already initialized the repository for you. Now, let's save our work.

1.  Open your terminal.
2.  Type `git status`. You will see all our files in red.
3.  Type `git add .` (Don't forget the period!).
4.  Type `git commit -m "feat: initial project structure and Day 1 assets"`

**Post-Commit Mission:**
Once you've done that, go to [GitHub](https://github.com) and create an account if you don't have one. We will be "pushing" your code to the cloud soon!

---

## 🧠 Brain Dump (Hippocampus)
- Does the concept of "Commiting" remind you of anything from video games? 
- Why do you think we added `.env` to the `.gitignore` file? (Hint: Think about your password).

Drop your thoughts in `../.project_brain/hippocampus/buffer.md`.
