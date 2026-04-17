# Day 3: The Laravel Engine (The Blueprint Level)

Today we build your first **Lego Set**. We are switching from writing simple scripts to building **Blueprints (Classes)**. Since you are a visual learner, we are going to use the **Video Game** analogy.

---

## 🏗️ Step 1: The Blueprint (Thinking in Boxes)
Imagine we are building a simple Bank app. Every **Account** in the bank has a **Balance** and a **Name**.

**Muscle Memory Exercise 1:**
Let's see the structure. Notice how we use `class` and `{}`.
```php
class Account 
{
    public $owner;
    public $balance = 0;

    public function deposit($amount) 
    {
        $this->balance += $amount;
        echo "Deposited $amount to $this->owner's account.\n";
    }
}
```

---

## 🏃 Step 2: Running the Engine (Muscle Memory)

I have created a folder for you called `src/`. This is where all your professional code will live from now on.

**Your Task:**
1.  Open the file I created for you: `src/Account.php`.
2.  Look at the `Namespace`. This is the "Address" of the file.
3.  Modify your `index.php` to use this new class.

### How to use your Blueprint:
In `index.php`, you will write this:
```php
require_once 'src/Account.php'; // Get the blueprint

$myAccount = new Account(); // Build a "House" (Object) from the blueprint
$myAccount->owner = "Director";
$myAccount->deposit(100);

echo "Final Balance: " . $myAccount->balance . "\n";
```

---

## 🧠 Brain Dump (Hippocampus)
- If you had a **Car** blueprint, what would be the **Properties** (Stats)?
- If you had a **Car** blueprint, what would be the **Methods** (Actions)?

Drop these into `../.project_brain/hippocampus/buffer.md`.
