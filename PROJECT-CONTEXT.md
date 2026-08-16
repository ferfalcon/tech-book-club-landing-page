---
artifact: PROJECT-CONTEXT
project: Tech book club landing page
profile: Lite
execution_mode: Gated
created: 2026-08-16
updated: 2026-08-16
---

# Project Context

## 1. Project

- Project name: Tech book club landing page
- Goal: Implement the approved Tech Book Club landing-page design in `frontend/` with high visual fidelity, responsive behavior, accessibility, maintainable Astro code, and traceable verification through Git and Vercel.
- Project type: Static page
- Profile rationale: Lite fits a single static landing page with several reusable sections and three explicit responsive designs. The work benefits from a separate design audit, implementation brief, task tracking, and final review, but Stage 0 evidence shows no authentication, persistence, API integration, multi-route flow, or material system architecture concern. Upgrade if later inspection reveals those concerns.
- Created: 2026-08-16
- Last updated: 2026-08-16

## 2. Active Source Baseline

- Source baseline: `SOURCE-BASELINE.md`
- Design snapshots: `SRC-DS-001`
- Repository snapshots: `SRC-REPO-001`
- Runtime snapshots: None
- Documentation snapshots: None — repository-owned instructions are covered by `SRC-REPO-001`
- Asset snapshots: None — repository assets are covered by `SRC-REPO-001` until a separate asset baseline is required

## 3. Design Scope

- Included pages, frames, nodes, screens, files, URLs, or regions: Figma page `🤖 Workflow` (`2142:363`), especially Main desktop `2142:1298`, tablet `2142:1911`, mobile `2142:2091`, plus Components `2142:1264`, Style Guide `2142:1265`, Visuals `2142:1297`, and Section Components `2151:714` used to interpret the page.
- Explicitly excluded areas: Other Figma pages and any structural or visual edits outside `🤖 Workflow`, except the repository-authorized controlled inspection or modification of shared file-global design-system resources when necessary.
- Access limitations: The Figma source is mutable and currently time-bound rather than pinned to an immutable named version.
- Known design-source dependencies: Local section components, button/component states, typography/color/spacing/radius guidance, responsive image variants, and decorative visual assets.

## 4. Repository Scope

- Target branch: Workflow control currently lives on `workflow/initialize-implementation`. Implementation changes must use a dedicated branch and follow branch → pull request → Vercel preview → verification → merge.
- Relevant application, package, or directory: `frontend/`
- Existing implementation state: Astro starter application; the Tech Book Club landing page has not yet been implemented in `frontend/`.
- Known technical constraints: Astro `^7.2.2`, TypeScript, pnpm `10.28.0`, Node `24.x`; use repository and nested `AGENTS.md` instructions; read `.agents/skills/modern-web-guidance/SKILL.md` before HTML/CSS/client-side JavaScript implementation.
- Access or tooling limitations: Canonical workflow state is CLI-managed. Generated files in `.workflow/generated/` must never be hand-edited.

## 5. Runtime References

- Production snapshot: Not registered at Stage 0
- Preview or staging snapshot: Not available at Stage 0
- Local runtime snapshot: Not available at Stage 0

The project has a known Vercel production deployment, but runtime claims will not be treated as verified workflow evidence until a `SRC-RUN-*` snapshot is registered and inspected.

## 6. Scope

### Included

- Implement the complete single-page Tech Book Club landing page represented by the scoped Figma desktop, tablet, and mobile designs.
- Preserve reusable section and component structure where it improves fidelity and maintainability.
- Implement semantic HTML, keyboard/focus behavior, accessible names and relationships, responsive behavior, appropriate reduced-motion handling, and relevant states.
- Use the repository-provided assets when they match the approved design and verify any asset/design discrepancies during the audit.
- Validate the production build and visually compare the rendered implementation with the Figma source before merge.
- Verify the relevant Vercel preview before merge when implementation changes are ready for review.

### Excluded

- Backend services, persistence, authentication, authorization, or external API work unless later evidence explicitly changes scope.
- Unrequested changes to other Figma pages.
- Manual production promotion or direct implementation pushes to `main`.
- Unrelated repository refactors.

### Deferred

- Exact implementation task decomposition until design audit and implementation-brief stages.
- Runtime/deployment snapshot registration until preview or runtime verification becomes material.
- Exact intermediate breakpoints until design evidence and content/layout failure points are evaluated.

## 7. Authoritative Sources

| Snapshot ID | Authority | Scope | Notes |
|---|---|---|---|
| `SRC-DS-001` | Design | Visual hierarchy, content placement, section composition, responsive reference designs, component appearance and states on `🤖 Workflow` | Does not independently prove semantic, keyboard, screen-reader, or intermediate responsive behavior |
| `SRC-REPO-001` | Current implementation / Technical constraint | Repository structure, framework/toolchain, operating contracts, starter code, bundled assets, source-control policy | Commit SHA is immutable; runner-path reference is not portable |

## 8. Quality Baseline

- Accessibility standard or expectations: Implement accessible semantic HTML and interactions consistent with the repository contract; verify keyboard/focus behavior and accessible names/relationships. Do not claim a conformance level until it is actually tested.
- Responsive coverage: Match the explicit 1440px desktop, 768px tablet, and 375px mobile reference designs and ensure robust behavior at intermediate widths based on content/layout needs rather than arbitrary device defaults.
- Browser or device coverage: Modern standards-based browsers; exact matrix will be selected during planning/validation if required by project evidence.
- Performance expectations: Appropriate for a static Astro landing page; optimize image/font delivery and avoid unnecessary client JavaScript. No unsupported numeric performance budget is assumed.
- Security and privacy expectations: No sensitive data, authentication, or persistence is in current scope; avoid introducing unnecessary third-party or client-side data handling.
- Testing expectations: Production build must pass; relevant visual, responsive, accessibility, and interaction checks must be executed with evidence before completion.
- Deployment expectations: Use Vercel preview verification before merge and preserve the repository setting that avoids builds for documentation-only changes. Do not manually promote production unless explicitly requested.

## 9. Constraints and Dependencies

| ID | Constraint or dependency | Evidence or snapshot | Impact | Status |
|---|---|---|---|---|
| `REQ-CON-001` | Implementation work belongs in `frontend/` and follows Astro/TypeScript/pnpm/Node constraints | `SRC-REPO-001` | Determines implementation paths and tooling | Confirmed |
| `REQ-CON-002` | Primary Figma editing scope is `🤖 Workflow`; other pages are protected | `SRC-DS-001`, `SRC-REPO-001` | Limits design changes and audit scope | Confirmed |
| `REQ-CON-003` | Implementation changes follow branch → PR → Vercel preview → verification → merge | `SRC-REPO-001` | Determines source-control and deployment workflow | Confirmed |
| `REQ-CON-004` | The Figma baseline is mutable/time-bound and must be reverified | `SRC-DS-001` | Requires source verification before material downstream work | Confirmed |

These Stage 0 narrative identifiers will be formally registered in traceability only when their owning Lite brief/requirement section is created.

## 10. Known Decisions

| Decision | Owner | Evidence or snapshot | Status |
|---|---|---|---|
| Use Lite workflow profile | Project owner / workflow | Scope evidence from `SRC-DS-001` and `SRC-REPO-001` | Confirmed |
| Use Gated execution mode | Project owner / workflow | Canonical workflow record | Confirmed |
| Implement the approved landing page in `frontend/` using Astro | Project owner / repository contract | `SRC-REPO-001` | Confirmed |
| Treat `🤖 Workflow` as the primary Figma scope | Project owner / repository contract | `SRC-DS-001`, `SRC-REPO-001` | Confirmed |

## 11. Initial Risks and Questions

### Blocking

- None after the Stage 0 design and repository sources are reverified in canonical workflow state.

### Non-blocking

- The Figma design snapshot is time-bound and can change at the same URL; downstream stages must reverify it.
- A workflow runtime snapshot has not yet been registered; runtime verification is deferred until it becomes material.
- The responsive source provides three reference widths, but intermediate behavior must still be derived and validated during design/specification work.

## 12. Stage 0 Completion

- [x] Scope is explicit.
- [x] `SOURCE-BASELINE.md` exists.
- [x] Every active snapshot ID exists and its pin strength is honest.
- [x] Design and repository scope are recorded.
- [x] The repository baseline uses a commit SHA.
- [x] Workflow profile is selected and justified.
- [x] Quality expectations are evidence-based and avoid unsupported numeric claims.
- [x] Blocking questions and source limitations are visible.
- [x] `WORKFLOW-STATE.md` exists and references the same active baseline.
