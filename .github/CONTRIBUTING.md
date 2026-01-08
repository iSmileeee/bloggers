# Contributing to Bloggers

Thank you for your interest in contributing to Bloggers! We welcome contributions from the community. Please read this guide carefully to understand how you can contribute effectively.

## 📋 Table of Contents

- [Code of Conduct](#code-of-conduct)
- [Getting Started](#getting-started)
- [How to Contribute](#how-to-contribute)
- [Development Workflow](#development-workflow)
- [Coding Standards](#coding-standards)
- [Testing](#testing)
- [Submitting Changes](#submitting-changes)
- [Reporting Issues](#reporting-issues)

## 🤝 Code of Conduct

This project follows a code of conduct to ensure a welcoming environment for all contributors. By participating, you agree to:

- Be respectful and inclusive
- Focus on constructive feedback
- Accept responsibility for mistakes
- Show empathy towards other contributors
- Help create a positive community

## 🚀 Getting Started

### Prerequisites

Before you begin, ensure you have the following installed:

- PHP 8.0 or higher
- Composer
- MySQL 8.0 or higher
- Node.js & npm
- Git

### Setup Development Environment

1. **Fork the repository** on GitHub
2. **Clone your fork** locally:
   ```bash
   git clone https://github.com/yourusername/bloggers.git
   cd bloggers
   ```
3. **Install dependencies**:
   ```bash
   composer install
   npm install
   ```
4. **Set up environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
5. **Configure database** and run migrations:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```
6. **Start development server**:
   ```bash
   php artisan serve
   ```

## 💡 How to Contribute

### Types of Contributions

- **🐛 Bug fixes** - Fix existing issues
- **✨ New features** - Add new functionality
- **📚 Documentation** - Improve docs or add examples
- **🎨 UI/UX improvements** - Enhance design and user experience
- **🧪 Tests** - Add or improve test coverage
- **🔧 Maintenance** - Code refactoring, performance improvements

### Finding Issues to Work On

- Check the [Issues](https://github.com/yourusername/bloggers/issues) page
- Look for issues labeled `good first issue` or `help wanted`
- Comment on issues you'd like to work on to avoid duplicate work

## 🔄 Development Workflow

### 1. Choose an Issue
- Select an issue from the [Issues](https://github.com/yourusername/bloggers/issues) page
- Comment on the issue to indicate you're working on it
- Wait for maintainer approval if required

### 2. Create a Branch
```bash
# Create and switch to a new branch
git checkout -b feature/your-feature-name
# or
git checkout -b fix/issue-number-description
```

### 3. Make Changes
- Write clean, well-documented code
- Follow the coding standards outlined below
- Test your changes thoroughly
- Update documentation if needed

### 4. Test Your Changes
```bash
# Run PHP tests
php artisan test

# Run frontend tests (if applicable)
npm test

# Manual testing
php artisan serve
```

### 5. Commit Your Changes
```bash
# Stage your changes
git add .

# Commit with a descriptive message
git commit -m "feat: add new feature description

- What was changed
- Why it was changed
- How it was implemented"
```

## 📝 Coding Standards

### PHP Standards
- Follow [PSR-12](https://www.php-fig.org/psr/psr-12/) coding standards
- Use meaningful variable and method names
- Add PHPDoc comments for classes and methods
- Keep methods focused and single-purpose

### JavaScript Standards
- Use modern ES6+ syntax
- Follow consistent naming conventions
- Add JSDoc comments for functions
- Keep code modular and reusable

### CSS/SCSS Standards
- Use consistent naming conventions (BEM methodology)
- Keep selectors specific and avoid deep nesting
- Use CSS custom properties for theming
- Optimize for performance

### Git Commit Standards
Follow conventional commit format:
```
type(scope): description

[optional body]

[optional footer]
```

Types:
- `feat`: New feature
- `fix`: Bug fix
- `docs`: Documentation
- `style`: Code style changes
- `refactor`: Code refactoring
- `test`: Testing
- `chore`: Maintenance

## 🧪 Testing

### Running Tests
```bash
# Run all tests
php artisan test

# Run specific test file
php artisan test tests/Feature/AuthTest.php

# Run with coverage
php artisan test --coverage
```

### Writing Tests
- Write tests for new features
- Ensure tests are fast and reliable
- Use descriptive test names
- Test both positive and negative scenarios

## 📤 Submitting Changes

### Pull Request Process

1. **Ensure your branch is up to date**:
   ```bash
   git fetch origin
   git rebase origin/main
   ```

2. **Push your branch**:
   ```bash
   git push origin feature/your-feature-name
   ```

3. **Create a Pull Request**:
   - Go to your fork on GitHub
   - Click "New Pull Request"
   - Select your feature branch
   - Fill out the PR template

4. **PR Description**:
   - Clear title describing the change
   - Detailed description of what was implemented
   - Screenshots for UI changes
   - Link to related issues

5. **Code Review**:
   - Address reviewer feedback
   - Make requested changes
   - Keep the PR updated

### PR Checklist
- [ ] Tests pass
- [ ] Code follows standards
- [ ] Documentation updated
- [ ] No breaking changes
- [ ] Screenshots included for UI changes

## 🐛 Reporting Issues

### Bug Reports
When reporting bugs, please include:

- **Clear title** describing the issue
- **Steps to reproduce** the problem
- **Expected behavior** vs actual behavior
- **Environment details** (PHP version, OS, browser)
- **Screenshots** if applicable
- **Error messages** or logs

### Feature Requests
For new features, please include:

- **Clear description** of the proposed feature
- **Use case** or problem it solves
- **Proposed implementation** if you have ideas
- **Mockups or examples** if applicable

## 🎯 Recognition

Contributors will be recognized in:
- The contributors list in README.md
- Release notes for significant contributions
- Special mentions in project updates

## 📞 Getting Help

If you need help or have questions:

- Check existing [Issues](https://github.com/yourusername/bloggers/issues) and [Discussions](https://github.com/yourusername/bloggers/discussions)
- Join our community chat (if available)
- Contact maintainers directly

## 📄 License

By contributing to this project, you agree that your contributions will be licensed under the same license as the project (MIT License).

---

Thank you for contributing to Bloggers! 🚀
