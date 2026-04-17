# Dependency Management & Autoloading

In modern PHP development, we do not manually manage files. We use **Composer**.

## 🏪 The App Store (Composer)
Composer is the **Dependency Manager** for PHP.
*   **Purpose**: To download and update third-party libraries (like Laravel, Stripe, or Excel generators).
*   **The Manifest (`composer.json`)**: This file lists all the "kits" your project needs.

## 🤖 The Robot Manager: PSR-4 Autoloading
The biggest "muscle-memory" pain in older PHP is writing `require_once` for every file.
*   **The Autoloader**: A single file (`vendor/autoload.php`) that tells PHP: *"Don't crash if you don't find a class. Ask me first, and I will find the file for you."*
*   **PSR-4**: The industry-standard naming convention that maps **Namespaces** to **Folders**.
    *   Example: `App\Account` mapped to `src/Account.php`.

## 🏛️ DevOps: Infrastructure as Code (IaC)
The `Dockerfile` is a script that builds your server.
*   Instead of saying "I have an Apache server," you say "Here is a file that builds an Apache server."
*   This makes your project **Portability Pro**: It will run exactly the same way on your laptop as it does on a professional server in the cloud.

---
**Verification Matrix:**
- [x] Composer Installed
- [x] PSR-4 Autoloading Configured
- [x] DevOps Infrastructure (Dockerfile) Verified
