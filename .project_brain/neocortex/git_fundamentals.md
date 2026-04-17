# Git Fundamentals & Safety

This node contains verified principles of version control and professional security practices.

## 💾 Saving Progress: The "Checkpoint" Concept
Version control uses the concept of **Commits**. 
*   **Analogy**: Like **Checkpoints in video games**. A commit creates a permanent snapshot of the code. If the application enters a "Failed State" (breaks), the developer can respawn at the previous checkpoint.
*   **Verification**: 2026-04-15 (Director confirmed analogy).

## 🛡️ The Great Barrier: `.gitignore`
Security in Laravel projects starts with the `.gitignore` file.
*   **Purpose**: To prevent sensitive information from being accidentally leaked to public platforms like GitHub.
*   **Critical Files to Ignore**:
    *   `.env`: Contains database passwords, API keys, and application secrets.
    *   `vendor/`: Third-party code that should be managed by Composer, not Git.
*   **Best Practice**: Never commit hardcoded credentials. Use environment variables.

---
**Verification Matrix:**
- [x] Checkpoint Analogy Validated
- [x] .env Safety Rationalized
