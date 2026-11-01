# AGENTS.md
# PROJECT DEVELOPMENT GUIDELINES

## 1. PROJECT IDENTITY

**Project Name:** Rise Profile  
**Project Type:** Student Community Company Profile Website  
**Framework:** Laravel 13  
**PHP Version:** 8.3.31  
**Database:** MySQL  
**Frontend:** Laravel Blade, HTML, CSS, JavaScript  
**Development Environment:** Laragon  
**Version Control:** Git & GitHub  

This project is a company profile website for a newly established student community.

The website aims to introduce the community, communicate its identity, showcase its divisions and organizational structure, document community activities, and provide information for people interested in joining.

The website is intended for:
- New university students (MABA).
- Active university students.
- The general public and wider community.

The project is developed collaboratively by a team. Team members may use different AI coding assistants and development tools.

All AI agents must follow the same project standards and instructions defined in this file.

---

## 2. COMMUNITY SCOPE AND PURPOSE

The community focuses on several main areas:

1. **Event Management**
   - Event planning and management.
   - Seminars, workshops, and community activities.
   - Event coordination and collaboration.

2. **Creative Media & Content Creation**
   - Content production.
   - Photography and videography.
   - Graphic design and creative communication.
   - Digital media production.

3. **Media & Journalism**
   - News and information publication.
   - Journalism and reporting.
   - Article and editorial production.
   - Community information dissemination.

4. **Technology & Development**
   - Full-stack development.
   - Web and application development.
   - Programming and technology exploration.
   - Digital product development.

These areas represent the community's main fields of activity. The actual division names, descriptions, and organizational arrangements must follow the latest decisions made by the team.

---

## 3. WEBSITE SCOPE

The initial website consists of the following sections:

### 3.1 Home
- Main hero section.
- Community introduction.
- Community highlights.
- Overview of divisions.
- Community introduction and joining calls to action.

### 3.2 About Us
- Community background and history.
- Community identity.
- Vision and mission.
- Goals and values.
- Community introduction.

### 3.3 Divisions
This section combines division information and organizational structure.

The main divisions page must display:
- Division name.
- Division image or visual identity.
- Short description.
- Main focus and responsibilities.
- Link or action to view division details.

When a visitor selects a division, its detail page must display:
- Division description.
- Division objectives and responsibilities.
- Organizational structure.
- Division mentor.
- Division coordinator.
- Division members.

Each organizational member profile must support:
- Profile photograph.
- Full name.
- Student Identification Number (NIM).
- University or campus of origin.
- Organizational position.

The organizational structure must be flexible and manageable through the administration system.

The hierarchy may include mentors, coordinators, and members. Additional positions may be introduced according to actual organizational needs.

### 3.4 Gallery
The gallery is intended to document community activities.

Gallery content may include:
- Community activities.
- Events and seminars.
- Workshops.
- Member activities.
- Division activities.
- Community collaborations.

Gallery items should support appropriate metadata, such as title, description, date, category, and photographs.

### 3.5 Join Us
- Community joining information.
- Membership requirements.
- Registration information.
- Registration form when required.

### 3.6 Contact
- Official contact information.
- Social media links.
- Community communication channels.

### Scope Restrictions

Do not independently introduce the following as separate main modules:
- News and Articles.
- Event Management as a separate website section.
- Projects Showcase.
- Standalone Organization Structure page.

Event and activity documentation belongs in Gallery.

Organizational structure belongs inside each division's detail page.

New features must only be introduced when requested or approved by the team.

---

## 4. TECHNOLOGY AND DEVELOPMENT STANDARDS

### 4.1 Backend
- Use Laravel 13.
- Follow Laravel conventions and recommended architecture.
- Use PHP 8.3 or compatible supported versions.
- Use Eloquent ORM for database interactions.
- Use Laravel migrations for database schema management.
- Use Form Requests for complex validation when appropriate.
- Use middleware for authentication and authorization.
- Keep business logic organized and maintainable.

### 4.2 Frontend
- Use Laravel Blade as the primary templating system unless the existing project architecture specifies otherwise.
- Use reusable Blade components.
- Keep HTML structure semantic and accessible.
- Use CSS and JavaScript in an organized manner.
- Use Laravel Vite when supported by the existing project setup.
- Avoid unnecessary frontend frameworks or dependencies.
- Maintain consistent layouts and reusable UI patterns.

### 4.3 Database
- Use MySQL.
- Use Laravel migrations to manage database changes.
- Use foreign keys and appropriate indexes.
- Apply appropriate database relationships.
- Avoid duplicated data.
- Use seeders and factories when useful.
- Never change or delete existing database structures without understanding their impact.

### 4.4 Code Quality
- Follow clean code principles.
- Use descriptive naming conventions.
- Avoid duplicated code.
- Prefer reusable components and services when appropriate.
- Keep controllers focused and maintainable.
- Avoid unnecessary complexity.
- Do not introduce dependencies without a clear reason.

---

## 5. UI/UX DESIGN GUIDELINES

UI/UX Pro Max is the primary design reference and design recommendation tool for this project.

All AI agents must follow the established design direction.

### General Design Principles
- Modern and professional visual appearance.
- Clean and consistent layouts.
- Strong visual hierarchy.
- Appropriate typography.
- Consistent color palette.
- Proper spacing and alignment.
- Responsive design for desktop, tablet, and mobile.
- Accessible color contrast and readable text.
- Consistent interaction patterns.

### Design Implementation Rules
- Follow the design system established by the team.
- Reuse existing components before creating new ones.
- Do not introduce random colors, fonts, or visual styles.
- Avoid unnecessary animations and visual effects.
- Use animations only when they improve the user experience.
- Maintain consistency across all website sections.

### UI/UX Pro Max
When UI/UX Pro Max is available:
- Use it to evaluate design direction.
- Apply appropriate design recommendations.
- Follow its recommendations for typography, color, spacing, and layout.
- Adapt recommendations to the community's identity and project requirements.

Do not assume that every recommendation must be implemented without considering the existing design system.

---

## 6. ARCHITECTURE AND PROJECT STRUCTURE

Before creating or modifying files:

1. Inspect the existing project structure.
2. Understand the current implementation.
3. Identify reusable components and existing conventions.
4. Follow the existing architecture whenever possible.
5. Avoid unnecessary structural changes.

Recommended architectural principles:

- Keep controllers organized by responsibility.
- Use models to represent database entities.
- Use Blade components for reusable interface elements.
- Separate public-facing pages from administrative functionality.
- Organize assets consistently.
- Keep routes readable and logically grouped.
- Maintain separation between presentation, business logic, and data access.

Do not reorganize the entire project without explicit approval.

---

## 7. AI AGENT WORKING RULES

These instructions apply to every AI coding assistant working on this repository.

### Before Starting a Task
Every AI agent must:

1. Read this AGENTS.md file.
2. Inspect the relevant project files.
3. Understand the existing implementation.
4. Check related routes, controllers, models, migrations, and views.
5. Identify dependencies and potential conflicts.
6. Understand the requested task before making changes.

### While Working
AI agents must:

- Work only within the requested scope.
- Respect existing code and architectural decisions.
- Reuse existing functionality whenever possible.
- Avoid overwriting work created by other team members.
- Avoid creating duplicate components, models, migrations, or routes.
- Avoid changing unrelated files.
- Explain important implementation decisions.
- Follow existing naming and coding conventions.

### Before Finishing
AI agents must:

1. Review all modified files.
2. Check for syntax errors.
3. Verify route and controller consistency.
4. Check database and migration implications.
5. Run relevant tests when available.
6. Report files created or modified.
7. Explain any remaining issues.

### Important Restrictions
AI agents must never:

- Delete existing project files without authorization.
- Modify environment credentials or expose secrets.
- Replace major architecture without team approval.
- Run destructive database commands without explicit approval.
- Modify another developer's work unnecessarily.
- Install unnecessary packages.
- Invent community information, member identities, NIMs, or organizational positions.
- Claim that tests have passed without actually running them.

If requirements are unclear, ask the team before making assumptions that could affect the architecture or business logic.

---

## 8. GIT AND TEAM COLLABORATION

This project uses one shared GitHub repository.

All team members must follow the same collaboration standards.

### Branch Strategy

- `main`: Stable and approved code.
- `develop`: Shared development integration branch.
- `feature/*`: New feature development.
- `fix/*`: Bug fixes.
- `hotfix/*`: Urgent production fixes.

Examples:

- `feature/home-page`
- `feature/about-page`
- `feature/divisions`
- `feature/division-structure`
- `feature/gallery`
- `feature/admin-dashboard`
- `fix/database-connection`

### Git Rules

- Do not work directly on `main`.
- Create a dedicated branch for each task.
- Pull the latest changes before starting work.
- Commit changes with clear messages.
- Push changes to the shared repository.
- Use Pull Requests for code integration.
- Review changes before merging.
- Resolve conflicts carefully.
- Do not force push shared branches without team approval.

### Commit Message Examples

- `feat: add division listing page`
- `feat: implement division organizational structure`
- `fix: resolve gallery image upload`
- `refactor: improve member management`
- `docs: update project guidelines`

### Shared Development Rules

Before modifying files that may also be edited by another team member:

- Check the current Git branch and working tree.
- Check whether related changes are already in progress.
- Coordinate conflicting work with the responsible developer.
- Avoid replacing entire files when a smaller modification is sufficient.

---

## 9. SECURITY GUIDELINES

All implementations must follow Laravel security best practices.

Requirements:

- Validate all incoming user input.
- Use CSRF protection.
- Apply authentication and authorization where required.
- Protect administrative routes.
- Avoid exposing sensitive information.
- Use secure password hashing.
- Use Eloquent or parameterized queries.
- Validate file uploads and restrict allowed file types.
- Avoid storing credentials in source code.
- Keep `.env` out of Git commits.
- Follow appropriate access control for administrative operations.

---

## 10. DOCUMENTATION AND COMMUNICATION

All significant architectural and technical decisions must be documented.

Future documentation may be maintained inside the `docs/` directory.

AI agents should update relevant documentation when approved changes affect:

- Project architecture.
- Database structure.
- Development standards.
- UI/UX design system.
- Development workflow.
- Application functionality.

AI agents must communicate implementation results clearly and concisely.

When reporting completed work, include:
- Summary of changes.
- Files created or modified.
- Important technical decisions.
- Commands executed.
- Tests performed and their actual results.
- Remaining issues or required follow-up.

---

## 11. FINAL PROJECT PRINCIPLE

The main objective is to build a professional, modern, maintainable, and responsive company profile website for a student community.

Every developer and AI agent must prioritize:

1. Consistency.
2. Maintainability.
3. Code quality.
4. Security.
5. User experience.
6. Team collaboration.
7. Respect for established project decisions.

**One Repository. One Development Standard. Multiple AI Agents.**

All contributors must follow the same project guidelines regardless of the AI tools or development environments they use.