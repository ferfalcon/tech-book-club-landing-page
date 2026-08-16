---
artifact: IMPLEMENTATION-BRIEF
status: Draft
baseline:
  design:
    - SRC-DS-001
  repository:
    - SRC-REPO-001
  runtime: []
  documentation: []
  assets: []
created: 2026-08-16
updated: 2026-08-16
project: Tech book club landing page
profile: Lite
execution_mode: Gated
---

# Implementation Brief

## 1. Document Information

- Status: Draft
- Scope: Complete single-page Tech Book Club landing page represented by the approved `🤖 Workflow` Figma scope and implemented in `frontend/`.
- Last updated: 2026-08-16
- Project context: `PROJECT-CONTEXT.md`
- Source baseline: `SOURCE-BASELINE.md`
- Evidence baseline: `DESIGN-AUDIT.md`
- Repository snapshot: `SRC-REPO-001`

## 2. Requirements

### Stage 2 source status

- Active inputs: `SRC-DS-001`, `SRC-REPO-001`.
- Design source re-verification: 2026-08-16 connected Figma metadata inspection confirmed that page `🤖 Workflow` (`2142:363`) still contains the audited desktop (`2142:1298`), tablet (`2142:1911`), mobile (`2142:2091`), Components, Style Guide, Visuals, and Section Components structures. No material structural conflict with `DESIGN-AUDIT.md` was detected.
- Repository authority: `SRC-REPO-001` remains the immutable implementation-input snapshot for repository constraints. Workflow-control commits after that snapshot do not redefine the frontend input baseline.

### Goals

- Deliver the complete Tech Book Club marketing landing page represented by `EVD-002`, `EVD-003`, and `EVD-004`, preserving the approved content hierarchy and visible product message.
- Make the same material content and membership information available across the supplied desktop, tablet, and mobile layout conditions without clipping, overlap, or loss of content.
- Preserve the approved visual hierarchy and interaction-state intent while adding the semantic, keyboard, focus, naming, image, reflow, and other accessibility behavior that Figma cannot independently prove.
- Keep the result a static Astro landing page with no unsupported backend, persistence, authentication, payment, subscription, or external-service behavior.
- Preserve traceability from approved design evidence and repository constraints through later design, specification, planning, implementation, and validation work.

### Non-goals

- Adding routes, modals, forms, checkout, account management, subscription processing, contact processing, authentication, persistence, or APIs not demonstrated or explicitly approved.
- Changing the approved marketing copy, membership information, testimonial, section order, or Figma scope without an explicit upstream decision.
- Treating 1440 px, 768 px, or 375 px as automatic CSS breakpoint thresholds; exact interpolation belongs to later design/specification work.
- Inventing CTA destinations, social-profile URLs, business rules, animation, or disabled/loading/error states that are not supported by the approved source or a later owner decision.
- Editing Figma pages outside the repository-authorized `🤖 Workflow` scope.

### Users and needs

- **Inferred primary visitor:** a developer or technology professional evaluating the book club, based on the page copy and `EVD-012`. The visitor needs to understand the club value proposition, how the reading journey works, membership options, social proof, and the available next actions.
- **Confirmed quality need:** visitors using keyboard or assistive technology must receive the same material content and meaningful interaction access required by the repository accessibility baseline in `SRC-REPO-001`.

### REQ-FR-001 — Present the complete landing-page content hierarchy

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** The delivered page must present the seven audited product sections in this order: Hero → Read Together → Community → Reading Journey → Membership Options → Testimonial → Footer.
- **Rationale:** This sequence is consistent across all three supplied compositions and defines the approved single-page information architecture.
- **Snapshot or evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-012` from `SRC-DS-001`.
- **Acceptance criteria:**
  - `AC-001`: One landing page contains all seven sections in the approved order.
  - `AC-002`: No approved section is omitted, duplicated, or moved to a different route.

### REQ-FR-002 — Preserve approved visible content and membership information

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Headings, body copy, feature lists, reading-journey steps, membership names, prices, benefits, CTA labels, social proof, testimonial text/attribution, and footer copy must match the approved design source unless an explicit content decision supersedes it.
- **Rationale:** The design audit identifies the visible text as authoritative design copy and no separate content source is registered.
- **Snapshot or evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-012` from `SRC-DS-001`.
- **Acceptance criteria:**
  - `AC-003`: Starter, Pro, and Enterprise are all present with the plan content and labels shown in the approved design.
  - `AC-004`: The testimonial, social-proof message, feature copy, journey copy, and section headings match the approved source except for explicitly approved content changes.

### REQ-FR-003 — Preserve content and usable layout across responsive conditions

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** The page must preserve all material content and intended reading order across the supplied desktop, tablet, and mobile conditions, with layout transformations consistent with the audited evidence. Intermediate widths must remain usable without content overlap, clipping, or layout-caused horizontal page scrolling.
- **Rationale:** The Figma source supplies three explicit responsive compositions but no implementation breakpoint thresholds.
- **Snapshot or evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-005`; `AUD-001`.
- **Acceptance criteria:**
  - `AC-005`: At 1440 px, 768 px, and 375 px reference widths, all material content is available and the major section transformations match the corresponding approved composition.
  - `AC-006`: At representative intermediate widths selected during later design/specification work, content does not overlap, clip, disappear, or force layout-caused horizontal page scrolling.

### REQ-FR-004 — Give every presented CTA an explicit approved action

- **Classification:** Recommended pending owner decision
- **Priority:** Must before implementation acceptance
- **Description:** Every CTA that is presented as actionable must perform an explicit approved action or destination rather than remain an inert control. Exact destinations are not defined by `SRC-DS-001` and therefore remain blocking product decisions in Stage 2.
- **Rationale:** `EVD-007`, `AUD-002`, and `AUD-009` demonstrate visual CTA interaction states but no click/tap destination or downstream flow.
- **Snapshot or evidence:** `EVD-006`, `EVD-007`; `AUD-002`, `AUD-009`.
- **Acceptance criteria:**
  - `AC-007`: The hero/footer “Review membership options” action has an owner-approved destination or in-page behavior before implementation of that interaction is accepted.
  - `AC-008`: Starter/Pro “Subscribe now” and Enterprise “Talk to us” each have an owner-approved destination or action before implementation of those interactions is accepted.
  - `AC-009`: No CTA is shipped as an apparently enabled control that performs no meaningful action.

### REQ-FR-005 — Present the approved social-proof content in both intended contexts

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Social proof must be presented in the hero and footer contexts as demonstrated by the approved design, with the corresponding content and responsive treatment.
- **Rationale:** Social proof is a repeated approved pattern and part of the page’s trust/message hierarchy.
- **Snapshot or evidence:** `EVD-005`, `EVD-012` from `SRC-DS-001`.
- **Acceptance criteria:**
  - `AC-010`: Hero and footer each contain the approved social-proof content without dropping the message at the supplied reference widths.

### REQ-AR-001 — Provide semantic structure and a coherent reading order

- **Classification:** Confirmed by project quality baseline
- **Priority:** Must
- **Description:** The implementation must expose a semantic document and landmark structure, meaningful heading hierarchy, and reading order that correspond to the approved visible content hierarchy.
- **Rationale:** Figma demonstrates visual hierarchy and reading order but cannot establish HTML semantics or assistive-technology navigation.
- **Snapshot or evidence:** `EVD-012`; accessibility expectations in `SRC-REPO-001` and `PROJECT-CONTEXT.md`.
- **Acceptance criteria:**
  - `AC-011`: The rendered document has a coherent heading hierarchy and appropriate page/section landmarks matching the visible content structure.
  - `AC-012`: DOM/assistive-technology reading order follows the meaningful top-to-bottom content order and does not depend on visual positioning alone.

### REQ-AR-002 — Provide keyboard-operable interactions and visible focus

- **Classification:** Confirmed by project quality baseline and observed focus intent
- **Priority:** Must
- **Description:** Every implemented interactive control must be keyboard reachable and operable when its semantics require it, with a clearly visible focus indication consistent with the supplied CTA focus-state intent.
- **Rationale:** CTA focus variants exist in the design, while prototype evidence does not establish keyboard behavior.
- **Snapshot or evidence:** `EVD-006`; `AUD-003`; accessibility expectations in `SRC-REPO-001`.
- **Acceptance criteria:**
  - `AC-013`: All interactive elements can be reached and operated using the keyboard according to their native semantics.
  - `AC-014`: Keyboard focus is visibly distinguishable on every interactive control; supplied CTA focus-state visual intent is preserved where applicable.

### REQ-AR-003 — Give images appropriate accessible semantics

- **Classification:** Confirmed by project quality baseline; exact per-image classification pending later design/specification work
- **Priority:** Must
- **Description:** Content-bearing images must expose useful alternative text, while purely decorative imagery must not add redundant or meaningless announcements. Each relevant image/visual must be classified according to its page purpose before final validation.
- **Rationale:** The design contains reusable photographs, avatars, patterns, glow, and technology artwork, but Figma does not specify alternative-text intent.
- **Snapshot or evidence:** `EVD-010`, `EVD-011`; `AUD-006`; accessibility expectations in `SRC-REPO-001`.
- **Acceptance criteria:**
  - `AC-015`: Every rendered image or equivalent visual has an explicit content-versus-decorative accessibility decision.
  - `AC-016`: Content images have useful accessible text where needed and decorative visuals are hidden from assistive technology or otherwise exposed without redundant content.

### REQ-AR-004 — Give icon-only social actions meaningful names and focus treatment

- **Classification:** Confirmed if the footer social icons are interactive; exact destinations remain open
- **Priority:** Must if interactive
- **Description:** Any footer social icon implemented as an interactive link/control must have a meaningful accessible name, keyboard access, and visible focus treatment. If an icon is intentionally non-interactive, it must not be exposed as an actionable control.
- **Rationale:** Bluesky and LinkedIn icons are present, but the design does not provide destination URLs or explicit focus/hover states for them.
- **Snapshot or evidence:** `AUD-005` from `SRC-DS-001`; accessibility expectations in `SRC-REPO-001`.
- **Acceptance criteria:**
  - `AC-017`: Interactive social icons expose meaningful accessible names and keyboard-visible focus.
  - `AC-018`: Non-interactive social artwork is not represented semantically as a link or button.

### REQ-AR-005 — Preserve readable, robust content under reflow and visual accessibility checks

- **Classification:** Confirmed by project quality baseline
- **Priority:** Must
- **Description:** The implemented page must remain readable and operable when content reflows across supported widths and during relevant zoom/text-resize checks, and implemented text/control states must be checked for sufficient visual contrast before acceptance. No conformance level is claimed until validation is actually executed.
- **Rationale:** Figma alone does not prove contrast compliance, browser zoom, text resize, or reflow behavior.
- **Snapshot or evidence:** `AUD-001`; accessibility observations in `DESIGN-AUDIT.md`; quality expectations in `SRC-REPO-001` and `PROJECT-CONTEXT.md`.
- **Acceptance criteria:**
  - `AC-019`: Relevant zoom/text-resize and narrow-width validation does not make material content or controls inaccessible because of clipping, overlap, or layout-caused horizontal page scrolling.
  - `AC-020`: Contrast of implemented text and interactive states is explicitly checked during validation; failed checks are corrected or documented as blocking.

### REQ-NFR-001 — Match the approved visual result at the supplied reference widths

- **Classification:** Confirmed
- **Priority:** Must
- **Category:** Visual fidelity
- **Description:** The rendered page must preserve the approved hierarchy, typography roles, color system, spacing relationships, imagery, section composition, and supplied interaction-state appearance at the 1440 px, 768 px, and 375 px reference conditions.
- **Measurement conditions:** Evidence-backed visual comparison against `EVD-002`, `EVD-003`, and `EVD-004` during implementation validation.
- **Snapshot or evidence:** `EVD-002` through `EVD-011` from `SRC-DS-001`.
- **Acceptance criteria:**
  - `AC-021`: Visual comparison at each supplied reference width finds no unresolved material discrepancy in page hierarchy, content, responsive composition, core typography/color treatment, imagery, or CTA state appearance.

### REQ-NFR-002 — Keep the static page implementation appropriately lightweight

- **Classification:** Confirmed by project quality baseline
- **Priority:** Should
- **Category:** Performance / maintainability
- **Description:** The implementation should retain the static-page character of the project, avoid unnecessary client-side JavaScript, and use appropriate image/font delivery for the approved content. No unsupported numeric performance budget is introduced.
- **Measurement conditions:** Production build and implementation inspection.
- **Snapshot or evidence:** `SRC-REPO-001`; `PROJECT-CONTEXT.md` quality baseline.
- **Acceptance criteria:**
  - `AC-022`: The production Astro build succeeds.
  - `AC-023`: Client-side JavaScript is introduced only where required by an approved interaction or implementation need rather than by default.

### Requirements not applicable to the approved Stage 2 scope

- No `REQ-DR-*` requirement is introduced because the approved scope contains no user-entered, persisted, fetched, or dynamically owned application data.
- No `REQ-SEC-*` requirement is introduced because the approved scope contains no authentication, authorization, sensitive-data flow, backend trust boundary, or external integration. General safe web implementation remains an engineering responsibility but no unsupported security policy is invented here.

### Constraints

#### REQ-CON-001 — Implement within the existing frontend toolchain

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Implementation work belongs in `frontend/` and must respect the repository’s Astro + TypeScript, pnpm, and Node.js constraints.
- **Snapshot or evidence:** `SRC-REPO-001`; `PROJECT-CONTEXT.md`.
- **Impact:** Later planning and implementation must use the existing application/toolchain rather than introducing an unrelated framework stack.

#### REQ-CON-002 — Preserve the protected Figma scope

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** The primary Figma scope is `🤖 Workflow`; other pages must not be structurally or visually modified without explicit approval, subject only to the repository-defined controlled global design-system exception.
- **Snapshot or evidence:** `SRC-DS-001`, `SRC-REPO-001`.
- **Impact:** Design follow-up cannot silently change unrelated Figma pages.

#### REQ-CON-003 — Follow branch, PR, preview verification, and merge policy

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Implementation changes must follow dedicated branch → pull request → relevant Vercel preview verification → merge, and must not be pushed directly to `main` unless explicitly requested.
- **Snapshot or evidence:** `SRC-REPO-001`; `PROJECT-CONTEXT.md`.
- **Impact:** Source-control and deployment validation are part of implementation completion.

#### REQ-CON-004 — Reverify the mutable Figma baseline before affected material work

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Because `SRC-DS-001` is time-bound rather than immutable, relevant Figma inputs must be reverified before later material work that depends on them. A material source change requires a new `SRC-*` record and impact assessment rather than silent reuse.
- **Snapshot or evidence:** `SRC-DS-001`; `PROJECT-CONTEXT.md`; workflow source-snapshot rules.
- **Impact:** Later stages may need to return to the earliest affected workflow stage if the design changes materially.

#### REQ-CON-005 — Keep unsupported application capabilities out of scope

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Backend services, persistence, authentication, authorization, payment/subscription processing, external APIs, and additional routes remain outside the approved scope unless later evidence and owner approval explicitly change it.
- **Snapshot or evidence:** `SRC-DS-001`, `SRC-REPO-001`; `PROJECT-CONTEXT.md`; `AUD-009`.
- **Impact:** Unresolved CTA destinations cannot be solved by inventing a backend or product flow.

#### REQ-CON-006 — Preserve documentation-only deployment filtering

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Work must preserve the project’s deployment behavior that avoids unnecessary Vercel builds for documentation-only changes outside the frontend deployment scope.
- **Snapshot or evidence:** `SRC-REPO-001`; project deployment expectations recorded in `PROJECT-CONTEXT.md`.
- **Impact:** Workflow/documentation changes must not intentionally broaden the Vercel build trigger scope.

### Dependencies

| Dependency | Snapshot or evidence | Purpose | Availability | Risk |
|---|---|---|---|---|
| Approved `🤖 Workflow` Figma scope | `SRC-DS-001`, `EVD-001`–`EVD-012` | Product content, visual intent, supplied responsive examples, components/states, imagery | Available; mutable/time-bound | Material edits at the same URL require re-verification and possible impact assessment |
| Repository/toolchain | `SRC-REPO-001` | Application constraints and implementation environment | Available; immutable input commit | Later workflow-control commits must not be confused with frontend input changes |
| Supplied photographs/member imagery | `EVD-010`, `AUD-006` | Approved visual content | Available in Figma | Accessible semantics and production-use/licensing status require explicit handling |
| CTA/social destinations | `AUD-002`, `AUD-005`, `AUD-009` | Meaningful interactive behavior | Not defined | Blocks final interaction requirements until owner decisions exist |

### Assumptions and recommendations

- **Inferred:** The intended product is one marketing landing page; all supplied compositions present the same section sequence and no alternate route or flow exists.
- **Recommended:** The hero/footer “Review membership options” CTA can use an in-page jump to Membership Options because that target exists on the same page, but this remains a recommendation until the owner approves it.
- **Recommended:** Exact CSS breakpoints should be selected later from the observed responsive transformations and content/layout failure points, not copied automatically from the three Figma frame widths.
- **Recommended:** Do not introduce motion solely for decoration; if later interaction design adds motion, reduced-motion behavior must be addressed before implementation acceptance.

### Blocking product decisions

1. What approved action should the hero/footer “Review membership options” CTA perform? Recommended default: in-page navigation to Membership Options.
2. What approved destination or action should Starter and Pro “Subscribe now” perform?
3. What approved destination or action should Enterprise “Talk to us” perform?
4. Are the Bluesky and LinkedIn footer icons intended as links? If yes, what exact approved destination URLs should they use?

Until these decisions are resolved, `REQ-FR-004` and the interactive portion of `REQ-AR-004` cannot become fully confirmed requirements.

### Non-blocking questions and risks

- Should footer copyright remain literal `© 2024 – Tech Book Club` or use an approved updated/dynamic year? This does not block layout work but must be resolved before content is treated as final.
- Are the supplied photographs/member portraits approved production assets with acceptable licensing? The files are available in Figma, but the audit did not establish licensing.
- Active/pressed visual treatment is not supplied for CTA controls. Later design/specification work should determine whether any additional state is materially required by the selected control semantics.
- Exact intermediate responsive thresholds remain intentionally deferred to Stage 3/4; this is not a Stage 2 blocker provided the outcome requirements above remain intact.

### Stage 2 review pass 1 — Completeness and correctness

- [x] Goals, non-goals, users, functional needs, accessibility expectations, non-functional expectations, constraints, dependencies, assumptions, questions, risks, and acceptance criteria are covered as applicable.
- [x] Material requirements are specific, prioritized, testable, and implementation-neutral except where the repository establishes a real constraint.
- [x] Unsupported backend, business, browser, performance-threshold, retention, authentication, security-policy, and breakpoint behavior was not invented.
- [x] CTA destinations and social-profile destinations remain explicit open decisions rather than inferred requirements.

### Corrections from Stage 2 review pass 1

- Reclassified CTA destination behavior as a blocking owner decision while retaining the usability requirement that apparently enabled CTAs must not ship inert.
- Kept exact responsive breakpoints out of requirements and expressed responsive needs as observable outcomes.
- Kept image semantics outcome-based; exact alt text and content/decorative classification remain for later design/specification work.
- Formalized the Stage 0 `REQ-CON-001` through `REQ-CON-004` identifiers in their owning Lite requirements section without renumbering them.

### Stage 2 review pass 2 — Consistency, traceability, source integrity, risks, and uncertainty

- [x] Requirement identifiers follow `Identifier-Conventions.md` and are owned only in this Requirements section.
- [x] Every material confirmed requirement cites approved evidence, an active snapshot, or the repository/project quality baseline.
- [x] Confirmed, inferred, recommended, and open information remain distinct.
- [x] The scoped Figma structure was reverified on 2026-08-16 before this Stage 2 update; no material structural conflict with the approved audit was detected.
- [x] No unsupported CTA destination, social URL, business rule, breakpoint threshold, or backend behavior is presented as confirmed.
- [x] Blocking product decisions are visible and prevent premature Stage 2 completion.

### Stage 2 readiness

`Blocked by unresolved product decisions` — the requirements baseline is otherwise complete, but CTA/social destination decisions listed above must be resolved before Stage 2 can pass its Gated checkpoint.

## 3. Design Intent

### DES-001 — Design decision title

- Classification:
- Intent:
- Snapshot and evidence:
- Requirement references:

### Responsive and interaction intent

Use `DES-RWD-*` and `DES-INT-*` identifiers. Document supplied viewport evidence, behavior between examples, states, content edge cases, and accessibility intent from the pinned design snapshots.

## 4. Specification

### SPEC-BEH-001 — Behavior title

- Requirement and design references:
- Source snapshots:
- Observable behavior:
- States and edge cases:
- Acceptance criteria: `AC-*`

Record applicable `SPEC-INT-*`, `SPEC-ACC-*`, `SPEC-VAL-*`, and `SPEC-DATA-*` items separately.

Do not invent arbitrary breakpoints, focus behavior, thresholds, or unsupported business rules.

## 5. Repository Context

- Repository snapshot: `SRC-REPO-*`
- Existing files and conventions:
- Reusable components, tokens, utilities, and tests:
- Confirmed commands:
- Constraints and technical debt:

Distinguish observed paths from proposed paths and do not rely on branch changes outside the pinned commit.

## 6. Implementation Plan

### PLAN-001 — Plan item title

- Objective:
- Requirement and specification references:
- Source snapshots:
- Files and modules:
- Dependencies:
- Implementation steps:
- Integrated accessibility, responsive, state, error, and test work:
- Validation:

Do not create a separate late accessibility implementation phase.

## 7. Architecture Decision

- Separate architecture needed: Yes / No
- Reason:

If the work requires meaningful routing, shared state, persistence, authentication, integrations, deployment, security, privacy, or migration decisions, upgrade to Standard or Full rather than overloading this brief.

## 8. Source-change Handling

- Snapshot verification required before task execution:
- Material changes that invalidate this brief:
- Earliest workflow section or stage to revisit:

Create new `SRC-*` IDs and perform an impact assessment rather than silently updating this brief to newer sources.

## 9. Risks, Assumptions, and Questions

### Blocking

- Stage 2 CTA/social destination decisions are listed in the Requirements section and remain unresolved.

### Non-blocking

- Footer-year treatment, image production-use/licensing confirmation, exact intermediate responsive thresholds, and any additional active/pressed CTA treatment remain documented non-blocking follow-up items.

## 10. Traceability

| Snapshot or evidence | Requirement | Design | Specification or criterion | Plan item | Validation |
|---|---|---|---|---|---|
| `EVD-002`, `EVD-003`, `EVD-004`, `EVD-012` | `REQ-FR-001`, `REQ-FR-002`, `REQ-FR-003`, `REQ-NFR-001` | Pending Stage 3 | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |
| `EVD-005` | `REQ-FR-003`, `REQ-FR-005` | Pending Stage 3 | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |
| `EVD-006`, `EVD-007`, `AUD-002`, `AUD-003`, `AUD-009` | `REQ-FR-004`, `REQ-AR-002` | Pending Stage 3 | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |
| `EVD-010`, `EVD-011`, `AUD-006` | `REQ-AR-003` | Pending Stage 3 | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |
| `AUD-005` | `REQ-AR-004` | Pending Stage 3 | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |
| `SRC-REPO-001` | `REQ-AR-001`, `REQ-AR-002`, `REQ-AR-005`, `REQ-NFR-002`, `REQ-CON-001`, `REQ-CON-003`, `REQ-CON-006` | Pending Stage 3 | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |
| `SRC-DS-001`, `SRC-REPO-001` | `REQ-CON-002`, `REQ-CON-004`, `REQ-CON-005` | Pending Stage 3 | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |

## 11. Review Pass 1 — Completeness and Correctness

- [ ] Scope and pinned repository context are accurate.
- [ ] Snapshot IDs exist and were actually used.
- [ ] Requirements, design intent, testable behavior, and implementation planning are complete for the Lite scope.
- [ ] Responsive, accessibility, states, errors, content edge cases, and validation are integrated.
- [ ] The work still qualifies for Lite.

## 12. Corrections from Pass 1

- ...

## 13. Review Pass 2 — Consistency, Traceability, Source Integrity, Risks, and Uncertainty

- [ ] Ownership sections and identifiers remain distinct.
- [ ] Every material plan item maps to approved requirements or specifications and pinned sources.
- [ ] No source changed silently after the brief baseline was recorded.
- [ ] No unsupported scope or assumption is presented as confirmed.
- [ ] Blocking questions are visible.
- [ ] Corrections from the first pass were included before this review.

## 14. Readiness

Select exactly one:

- `Ready for task decomposition`
- `Ready with documented non-blocking assumptions`
- `Blocked by unresolved decisions`
