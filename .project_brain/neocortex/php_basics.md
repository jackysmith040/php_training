# PHP Basics & Core Concepts

This node contains verified foundational truths about the PHP programming language.

## 🏁 Syntax & Initiation

### The PHP Opening Tag (`<?php`)
PHP files are interpreted by the server. The `<?php` tag is the signaling mechanism that tells the engine: "Everything from here on is logic to be executed, not text to be displayed." 
*   **Analogy:** It is the "Action!" call on a movie set.
*   **Note:** In files that contain only PHP, the closing tag `?>` is intentionally omitted to prevent accidental whitespace being sent to the browser.

## 🧵 Data Manipulation

### String Concatenation (`.`)
The period (`.`) is the **Concatenation Operator**. It is used to join two string values together into one.
*   **Example:** `"Hello " . "World"` results in `"Hello World"`.
*   **Context:** Unlike many other languages that use `+` for both math and string joining, PHP strictly reserves `.` for strings to avoid logical ambiguity with mathematical operations.

---
**Verification Matrix:**
- [x] Opening Tag confirmed (Day 1)
- [x] Concatenation confirmed (Day 1)
