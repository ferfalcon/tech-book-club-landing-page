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
- Owner interaction decisions recorded on 2026-08-16:
  - Hero/footer “Review membership options” links navigate in-page to Membership Options.
  - Starter/Pro “Subscribe now” links use `href="#"`; a real subscription destination is out of scope.
  - Enterprise “Talk to us” uses `href="#"`; a real contact destination is out of scope.
  - Bluesky and LinkedIn icons are links using `href="#"`; real social-profile destinations are out of scope.

### Goals

- Deliver the complete Tech Book Club marketing landing page represented by `EVD-002`, `EVD-003`, and `EVD-004`, preserving the approved content hierarchy and visible product message.
- Make the same material content and membership information available across the supplied desktop, tablet, and mobile layout conditions without clipping, overlap, or loss of content.
- Preserve the approved visual hierarchy and interaction-state intent while adding semantic, keyboard, focus, naming, image, reflow, and other accessibility behavior that Figma cannot independently prove.
- Keep the result a static Astro landing page with no backend, persistence, authentication, payment, subscription processing, contact processing, or external-service behavior.
- Preserve traceability from approved design evidence and repository constraints through later design, specification, planning, implementation, and validation work.

### Non-goals

- Adding routes, modals, forms, checkout, account management, subscription processing, contact processing, authentication, persistence, or APIs not demonstrated or explicitly approved.
- Providing real external destinations for subscription, contact, Bluesky, or LinkedIn links; those destinations are explicitly out of scope and use `#` placeholders.
- Changing the approved marketing copy, membership information, testimonial, section order, or Figma scope without an explicit upstream decision.
- Treating 1440 px, 768 px, or 375 px as automatic CSS breakpoint thresholds. Approved Stage 3/4 intent defines interpolation outcomes and validation probes while leaving exact threshold selection to implementation based on layout failure points.
- Inventing business rules, animation, or disabled/loading/error states not supported by the approved source or a later owner decision.
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

### REQ-FR-004 — Implement the owner-approved CTA link behavior

- **Classification:** Confirmed by owner decision
- **Priority:** Must
- **Description:** CTA controls are links. Hero and footer “Review membership options” links navigate to the Membership Options section on the same page. Starter/Pro “Subscribe now” and Enterprise “Talk to us” use literal `href="#"` placeholder destinations because real subscription/contact destinations and flows are outside this project scope.
- **Rationale:** `EVD-007`, `AUD-002`, and `AUD-009` show CTA affordances without destinations; the project owner supplied the missing Stage 2 behavior on 2026-08-16.
- **Snapshot or evidence:** `EVD-006`, `EVD-007`; `AUD-002`, `AUD-009`; owner decision 2026-08-16.
- **Acceptance criteria:**
  - `AC-007`: Hero and footer “Review membership options” links target the Membership Options section using an in-page fragment identifier.
  - `AC-008`: Starter and Pro “Subscribe now” links and Enterprise “Talk to us” are anchor elements whose `href` value is exactly `#` unless the owner later explicitly expands scope.
  - `AC-009`: No subscription, checkout, contact, account, or external destination behavior is implemented behind those `#` placeholders.

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
- **Description:** The implementation must expose a semantic document and landmark structure, meaningful heading hierarchy, and reading order corresponding to the approved visible content hierarchy.
- **Rationale:** Figma demonstrates visual hierarchy and reading order but cannot establish HTML semantics or assistive-technology navigation.
- **Snapshot or evidence:** `EVD-012`; accessibility expectations in `SRC-REPO-001` and `PROJECT-CONTEXT.md`.
- **Acceptance criteria:**
  - `AC-011`: The rendered document has a coherent heading hierarchy and appropriate page/section landmarks matching the visible content structure.
  - `AC-012`: DOM/assistive-technology reading order follows the meaningful top-to-bottom content order and does not depend on visual positioning alone.

### REQ-AR-002 — Provide keyboard-operable interactions and visible focus

- **Classification:** Confirmed by project quality baseline and observed focus intent
- **Priority:** Must
- **Description:** Every implemented interactive control must be keyboard reachable and operable according to its semantics, with clearly visible focus indication consistent with the supplied CTA focus-state intent.
- **Rationale:** CTA focus variants exist in the design, while prototype evidence does not establish keyboard behavior.
- **Snapshot or evidence:** `EVD-006`; `AUD-003`; accessibility expectations in `SRC-REPO-001`.
- **Acceptance criteria:**
  - `AC-013`: All links and other interactive elements can be reached and activated using the keyboard according to native semantics.
  - `AC-014`: Keyboard focus is visibly distinguishable on every interactive control; supplied CTA focus-state visual intent is preserved where applicable.

### REQ-AR-003 — Give images appropriate accessible semantics

- **Classification:** Confirmed by project quality baseline; current scoped visual classifications resolved by approved Stage 3/4 design and specification
- **Priority:** Must
- **Description:** Content-bearing images must expose useful alternative text, while purely decorative imagery must not add redundant or meaningless announcements. Each relevant image/visual must be classified according to its page purpose before final validation.
- **Rationale:** The design contains reusable photographs, avatars, patterns, glow, and technology artwork, but Figma does not specify alternative-text intent.
- **Snapshot or evidence:** `EVD-010`, `EVD-011`; `AUD-006`; accessibility expectations in `SRC-REPO-001`.
- **Acceptance criteria:**
  - `AC-015`: Every rendered image or equivalent visual has an explicit content-versus-decorative accessibility decision.
  - `AC-016`: Content images have useful accessible text where needed and decorative visuals are hidden from assistive technology or otherwise exposed without redundant content.

### REQ-AR-004 — Provide accessible social links

- **Classification:** Confirmed by owner decision and project quality baseline
- **Priority:** Must
- **Description:** Bluesky and LinkedIn are interactive links using literal `href="#"` placeholders. Each icon-only link must have a meaningful accessible name, keyboard access, and visible focus treatment. Real profile URLs are outside scope.
- **Rationale:** `AUD-005` identifies missing social-link behavior; the owner confirmed on 2026-08-16 that both icons are links and that `#` placeholders must be used.
- **Snapshot or evidence:** `AUD-005` from `SRC-DS-001`; `SRC-REPO-001`; owner decision 2026-08-16.
- **Acceptance criteria:**
  - `AC-017`: Bluesky and LinkedIn are anchor elements whose `href` value is exactly `#` unless the owner later explicitly expands scope.
  - `AC-018`: Each social link exposes the corresponding meaningful accessible name and a keyboard-visible focus indication.

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
- **Description:** Backend services, persistence, authentication, authorization, payment/subscription processing, contact processing, external APIs, and additional routes remain outside the approved scope unless later evidence and owner approval explicitly change it.
- **Snapshot or evidence:** `SRC-DS-001`, `SRC-REPO-001`; `PROJECT-CONTEXT.md`; `AUD-009`; owner decision 2026-08-16.
- **Impact:** Placeholder `#` links must not be expanded into unsupported product flows.

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
| CTA/social link behavior | `EVD-007`, `AUD-002`, `AUD-005`, `AUD-009`; owner decision 2026-08-16 | Link behavior | Resolved for current scope | Real subscription/contact/social destinations remain intentionally out of scope |

### Assumptions and approved decisions

- **Inferred:** The intended product is one marketing landing page; all supplied compositions present the same section sequence and no alternate route or flow exists.
- **Confirmed by owner:** Hero/footer “Review membership options” navigates in-page to Membership Options.
- **Confirmed by owner:** Starter/Pro “Subscribe now”, Enterprise “Talk to us”, Bluesky, and LinkedIn use `href="#"` placeholders; their real destinations are out of scope.
- **Recommended:** Exact CSS breakpoints should be selected later from observed responsive transformations and content/layout failure points, not copied automatically from the three Figma frame widths.
- **Recommended:** Do not introduce motion solely for decoration; if later interaction design adds motion, reduced-motion behavior must be addressed before implementation acceptance.

### Blocking product decisions

None for Stage 2.

### Non-blocking questions and risks

- Footer copyright: resolved downstream for current scope by Stage 4 as the literal `© 2024 – Tech Book Club` unless an approved upstream content decision changes it.
- Supplied photographs/member portraits: production-use/licensing confirmation remains unresolved; no licensing claim is introduced by the workflow.
- CTA active/pressed/disabled treatment: resolved downstream for current static-link scope; Stages 3–4 require no authored persistent/async state beyond supplied default/hover/focus intent and native transient activation.
- Responsive thresholds: Stage 3/4 resolved the interpolation strategy and validation probes while intentionally leaving exact CSS thresholds to implementation based on layout/content failure points.
- Links with `href="#"` are intentional scope placeholders, not representations of finished external product journeys.

### Stage 2 review pass 1 — Completeness and correctness

- [x] Goals, non-goals, users, functional needs, accessibility expectations, non-functional expectations, constraints, dependencies, assumptions, questions, risks, and acceptance criteria are covered as applicable.
- [x] Material requirements are specific, prioritized, testable, and implementation-neutral except where the repository or owner establishes a real constraint.
- [x] Unsupported backend, business, browser, performance-threshold, retention, authentication, security-policy, and breakpoint behavior was not invented.
- [x] CTA and social-link behavior now reflects explicit owner decisions rather than inferred destinations.

### Corrections from Stage 2 review pass 1

- Confirmed the in-page Membership Options navigation for hero/footer membership-review links.
- Confirmed literal `href="#"` placeholders for Starter/Pro subscription, Enterprise contact, Bluesky, and LinkedIn links and explicitly kept their real destinations out of scope.
- Removed the earlier requirement that all CTA links resolve to meaningful external destinations, because it contradicted the owner-approved placeholder scope.
- Kept exact responsive breakpoints out of requirements and expressed responsive needs as observable outcomes.
- Kept image semantics outcome-based in Stage 2; Stage 3/4 later resolved the current visual classifications in `DES-003` and `SPEC-ACC-002`.
- Preserved Stage 0 `REQ-CON-001` through `REQ-CON-004` identifiers in their owning Lite requirements section without renumbering them.

### Stage 2 review pass 2 — Consistency, traceability, source integrity, risks, and uncertainty

- [x] Requirement identifiers follow `Identifier-Conventions.md` and are owned only in this Requirements section.
- [x] Every material confirmed requirement cites approved evidence, an active snapshot, the repository/project quality baseline, or an explicit owner decision.
- [x] Confirmed, inferred, recommended, and open information remain distinct.
- [x] The scoped Figma structure was reverified on 2026-08-16 before this Stage 2 update; no material structural conflict with the approved audit was detected.
- [x] No unsupported subscription, contact, social-profile, backend, business-rule, or breakpoint behavior is presented as confirmed.
- [x] The `#` placeholder decisions are explicit and do not silently imply external flows.
- [x] No Stage 2 blocking product decision remains.

### Stage 2 readiness

`Ready for Stage 2 gated approval` — requirements are complete for the current Lite scope. Per Gated execution mode, do not advance to Stage 3 until the project owner explicitly approves Stage 2.

## 3. Design Intent

### Stage 3 source status

- Active inputs: `SRC-DS-001`, `SRC-REPO-001`; Stage 2 is recorded as owner-approved in the workflow record.
- Design source re-verification: On 2026-08-16, connected Figma metadata plus fresh rendered screenshots confirmed the audited desktop (`2142:1298`, 1440 px), tablet (`2142:1911`, 768 px), and mobile (`2142:2091`, 375 px) compositions, their seven-section order, section-component variants, and the Primary/Alternate CTA state sets. No material visual or structural conflict with `DESIGN-AUDIT.md` was detected.
- The three supplied frame widths are design-reference conditions and validation anchors. They are not automatically implementation breakpoint thresholds.
- Stage 3 records visual, responsive, content, interaction, and accessibility intent only. Implementation architecture and file/module choices remain outside this stage.

### DES-001 — Preserve the landing-page narrative and visual hierarchy

- **Classification:** Confirmed and observed.
- **Intent:** Preserve the approved seven-section sequence and its visual emphasis: Hero → Read Together → Community → Reading Journey → Membership Options → Testimonial → Footer. The hero establishes the primary value proposition and first CTA; the two editorial sections explain the community value; Reading Journey explains progression; Membership Options is the commercial comparison focal point; the testimonial provides social validation; and the dark footer closes with the repeated membership CTA and social proof. Do not reorder, merge, hide, or visually demote these sections in a way that changes the approved narrative.
- **Snapshot and evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-012`; fresh Stage 3 renders of `2142:1298`, `2142:1911`, and `2142:2091` from `SRC-DS-001`.
- **Requirement references:** `REQ-FR-001`, `REQ-FR-002`, `REQ-FR-005`, `REQ-NFR-001`.
- **Confidence:** High — section order and hierarchy are consistent across all supplied reference compositions.

### DES-002 — Preserve the approved typography, color, spacing, and emphasis system

- **Classification:** Observed.
- **Intent:** Preserve the distinct typographic roles documented by the local design system: Martian Mono for display/heading/label emphasis, Inter for body copy, and Fira Code for the brand wordmark. Preserve the neutral and light-salmon foundation palette, the light patterned content surfaces, the dark footer surface, and the coral/salmon accent language. Maintain the Pro membership card as the visibly emphasized plan without introducing a selected-state meaning. Preserve the source spacing rhythm, rounded-corner language, thin outlines, and decorative grid/glow treatments as secondary to content rather than allowing decoration to reduce legibility.
- **Snapshot and evidence:** Style Guide and local variables in `EVD-008`, `EVD-009`; visual inventory in `DESIGN-AUDIT.md`; `EVD-002`, `EVD-003`, `EVD-004`.
- **Requirement references:** `REQ-FR-002`, `REQ-NFR-001`, `REQ-AR-005`.
- **Confidence:** High — the design system and repeated section instances provide explicit visual evidence.

### DES-003 — Treat photography and decorative artwork according to page purpose

- **Classification:** Recommended accessibility interpretation based on observed source purpose.
- **Intent:** Keep the approved hero, reading-group, and community photographs in their demonstrated visual roles and crops, but treat them as decorative/context-setting for assistive technology because the adjacent headings and copy carry the material product information. Treat member-avatar artwork as decorative because the adjacent “200+ developers joined already” text carries the social-proof meaning. Treat background patterns, glow, journey arrows, circle marks, and the technology-logo cluster as decorative. The Tech Book Club brand mark is content-bearing identity and must expose the brand name once without causing duplicate announcements. No decorative visual should become an interactive control unless a later approved requirement changes scope.
- **Snapshot and evidence:** `EVD-005`, `EVD-010`, `EVD-011`; `AUD-006`, `AUD-008`; fresh Stage 3 renders from `SRC-DS-001`.
- **Requirement references:** `REQ-AR-003`, `REQ-FR-005`, `REQ-NFR-001`.
- **Confidence:** Medium — the visual roles are clear, while accessibility semantics are an implementation-facing interpretation not encoded by Figma itself.

### DES-004 — Preserve readable content and allow vertical growth under reflow

- **Classification:** Confirmed outcome with recommended edge-case treatment.
- **Intent:** Preserve all approved copy without truncation. Headings, descriptive copy, list items, social-proof text, prices, testimonial text, and footer content may wrap as space tightens; section and card height should grow rather than clip content. CTA labels should remain readable and intact. The approved source copy is the content baseline; no localization or arbitrary long-content scenario is introduced, but modest browser/text-resize wrapping must not break the hierarchy or hide material information.
- **Snapshot and evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-012`; `AUD-001`; accessibility observations in `DESIGN-AUDIT.md`.
- **Requirement references:** `REQ-FR-002`, `REQ-FR-003`, `REQ-AR-005`, `REQ-NFR-001`.
- **Confidence:** High for the no-loss/no-clipping outcome; medium for exact intermediate wrapping because Figma supplies only three reference conditions.

### DES-RWD-001 — Use the supplied viewport compositions as reference conditions, not hard-coded thresholds

- **Classification:** Observed with recommended interpolation principle.
- **Intent:** Match the 1440 px desktop, 768 px tablet, and 375 px mobile compositions at those reference conditions. Between them, transition to the next simpler layout before content or controls collide, become overly compressed, or create horizontal page scrolling. Stage 4 may select implementation thresholds from observed layout failure points; it must not assume that 1440, 768, or 375 are the threshold values merely because they are Figma frame widths.
- **Snapshot and evidence:** `EVD-002`, `EVD-003`, `EVD-004`; `AUD-001`; fresh Stage 3 renders from `SRC-DS-001`.
- **Requirement references:** `REQ-FR-003`, `REQ-AR-005`, `REQ-NFR-001`, `REQ-CON-004`.
- **Confidence:** High for the three reference conditions; medium for intermediate-width interpolation because thresholds are intentionally absent from the source.

### DES-RWD-002 — Stack the hero and editorial sections while preserving text-first reading order

- **Classification:** Observed.
- **Intent:** On desktop, preserve the hero’s text/social-proof and image columns, Read Together’s image-left/text-right composition, and Community’s text-left/image-right composition. At tablet and mobile conditions, stack these sections vertically: hero text/CTA/social proof before the hero image; Read Together text/checklist before its image; Community text before its image. The DOM/assistive-technology order should follow the meaningful text-first sequence so responsive visual changes do not require a different reading order.
- **Snapshot and evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-005`, `EVD-012`; `2142:1298`, `2142:1911`, `2142:2091`.
- **Requirement references:** `REQ-FR-003`, `REQ-AR-001`, `REQ-NFR-001`.
- **Confidence:** High — the transformation is directly demonstrated at all three supplied conditions.

### DES-RWD-003 — Transform journey, membership, testimonial, and footer layouts progressively

- **Classification:** Observed.
- **Intent:** Keep Reading Journey as a horizontal four-step progression on desktop and a vertical sequence on tablet/mobile. Keep Membership Options as three cards in one row on desktop; at the supplied tablet condition use a two-column arrangement with the third card wrapping below; at mobile use one full-width card per row in Starter → Pro → Enterprise order. Keep testimonial content centered on desktop and left-aligned at tablet/mobile. Preserve the centered footer CTA/social-proof block while allowing the footer utility content to simplify from the wider desktop/tablet arrangement to the mobile stacked treatment shown by the source.
- **Snapshot and evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-005`; fresh Stage 3 renders of `2142:1298`, `2142:1911`, `2142:2091`.
- **Requirement references:** `REQ-FR-001`, `REQ-FR-003`, `REQ-FR-005`, `REQ-NFR-001`.
- **Confidence:** High — each transformation is visible in the supplied compositions.

### DES-RWD-004 — Keep intermediate widths and accessibility reflow free of layout-caused loss

- **Classification:** Recommended implementation-facing design intent.
- **Intent:** Use flexible container widths and allow images, cards, text blocks, and section heights to adapt between the reference compositions. Preserve image crops/aspect intent without stretching; allow cards to wrap or stack before their copy or CTAs become cramped; allow headings and testimonial copy to wrap naturally; and avoid layout-caused horizontal page scrolling. Zoom/text-resize validation must retain the same content order and available controls even when the rendered result no longer matches an exact Figma line break.
- **Snapshot and evidence:** `AUD-001`; `EVD-002`, `EVD-003`, `EVD-004`; accessibility expectations from `SRC-REPO-001`.
- **Requirement references:** `REQ-FR-003`, `REQ-AR-005`, `REQ-NFR-001`.
- **Confidence:** Medium — the outcome is required, but exact intermediate layouts are not directly supplied.

### DES-INT-001 — Preserve CTA link behavior and the supplied default, hover, and focus visual language

- **Classification:** Confirmed by owner decision plus observed component states.
- **Intent:** Treat all CTA controls as links. Hero/footer “Review membership options” links navigate to the Membership Options section. Starter/Pro “Subscribe now” and Enterprise “Talk to us” retain literal `href="#"` placeholders with no hidden subscription/contact behavior. Preserve the supplied Primary and Alternate default/hover/focus appearances for their respective contexts and ensure the focus treatment is keyboard-visible. Do not invent loading, disabled, success, error, selected, or application-managed pressed states for these static links; ordinary link activation behavior does not create a new persistent UI state.
- **Snapshot and evidence:** `EVD-006`, `EVD-007`; `AUD-002`, `AUD-003`, `AUD-004`, `AUD-009`; owner decisions recorded 2026-08-16; Primary Button `136:1610`; Alternate Button `172:820`.
- **Requirement references:** `REQ-FR-004`, `REQ-AR-002`, `REQ-CON-005`.
- **Confidence:** High — destinations for the current scope are owner-approved and visual states are explicitly supplied.

### DES-INT-002 — Give icon-only social links clear names and a visible focus treatment

- **Classification:** Confirmed semantics with recommended visual treatment.
- **Intent:** Bluesky and LinkedIn remain icon-only links with literal `href="#"` placeholders and meaningful accessible names. Their keyboard focus must be clearly visible. Because Figma supplies no social-icon hover/focus variants, reuse the established focus language from the CTA system where practical rather than inventing a new branded interaction pattern. Any hover enhancement must remain subtle, preserve icon recognition/contrast, and must not be required to understand the control.
- **Snapshot and evidence:** `AUD-005`; `150:878`, `150:879`; CTA focus-state evidence in `EVD-006`; owner decision 2026-08-16.
- **Requirement references:** `REQ-AR-002`, `REQ-AR-004`.
- **Confidence:** High for semantics and focus requirement; medium for the exact social-link visual treatment because the source omits those variants.

### DES-INT-003 — Do not add authored motion that the design does not demonstrate

- **Classification:** Recommended conservative interpretation of missing motion evidence.
- **Intent:** Use normal link navigation and state changes without adding entrance animation, looping decoration, scroll-linked effects, or authored smooth scrolling solely for polish. This keeps the rendered behavior faithful to the static/prototype evidence and avoids introducing unnecessary motion or client-side behavior. If motion is later explicitly approved, reduced-motion handling becomes part of the owning design/specification change.
- **Snapshot and evidence:** Interaction/motion audit in `DESIGN-AUDIT.md`; `AUD-002`, `AUD-009`; `SRC-REPO-001` lightweight-static-page expectation.
- **Requirement references:** `REQ-NFR-002`, `REQ-CON-005`.
- **Confidence:** High that no motion is demonstrated; medium that absence means “do not add” rather than merely “unspecified,” so this remains an explicit Stage 3 design decision for owner approval.

### Stage 3 review pass 1 — Completeness and correctness

- [x] Visual hierarchy, typography/color/spacing intent, imagery, content edges, supplied responsive transformations, intermediate-width intent, interaction states, motion, and accessibility implications are covered for the Lite scope.
- [x] The 1440 px, 768 px, and 375 px frames are treated as validation anchors rather than invented breakpoint thresholds.
- [x] Desktop/tablet/mobile differences are described from fresh Stage 3 Figma evidence, including the tablet two-column membership wrap and mobile single-column membership stack.
- [x] CTA and social-link behavior remains consistent with the owner-approved Stage 2 decisions.
- [x] No implementation architecture, framework structure, or unsupported business behavior was introduced.

### Corrections from Stage 3 review pass 1

- Made the tablet Membership Options intent explicit as two columns with Enterprise wrapping below rather than describing tablet merely as “multi-column.”
- Classified the three contextual photographs, member avatars, patterns/glow, journey arrows, and technology-logo artwork as decorative for assistive technology, while keeping the Tech Book Club brand identity content-bearing.
- Explicitly required text/card vertical growth rather than clipping when browser or text reflow changes line breaks.
- Resolved the missing CTA active/disabled-state question by documenting that no authored persistent/async state is required for the approved static-link behavior.
- Kept exact breakpoint thresholds deferred from Stage 3 and tied future implementation thresholds to layout failure points instead of Figma frame widths; Stage 4 later preserved that implementation-level threshold decision and added validation probes.
- Added a conservative no-authored-motion decision because no motion behavior is demonstrated by the approved source.

### Stage 3 review pass 2 — Consistency, traceability, source integrity, risks, and uncertainty

- [x] All `DES-*`, `DES-RWD-*`, and `DES-INT-*` items map to approved requirements and active source evidence.
- [x] Fresh Figma metadata and rendered screenshots were checked on 2026-08-16 before recording Stage 3 intent; no material source change was detected.
- [x] Observed, confirmed, recommended, and accessibility-derived decisions remain explicitly classified and include confidence.
- [x] The design intent preserves the same content hierarchy and material information across responsive conditions and assistive-technology reading order.
- [x] Placeholder destinations remain placeholders and do not imply subscription, contact, or social-profile flows.
- [x] Image licensing and footer-year treatment remain visible non-blocking product/content risks rather than being silently decided in design intent.
- [x] No Stage 3 blocking product decision remains.

### Stage 3 readiness

`Ready for Stage 3 gated approval` — design intent is complete for the current Lite scope. Per Gated execution mode, do not advance to Stage 4 until the project owner explicitly approves Stage 3.

## 4. Specification

### Stage 4 source status

- Active inputs: `SRC-DS-001`, `SRC-REPO-001`; Stage 3 is recorded as owner-approved in the workflow record.
- Design source re-verification: On 2026-08-16, connected Figma metadata confirmed that the audited desktop (`2142:1298`), tablet (`2142:1911`), mobile (`2142:2091`), section-component variants, and Primary/Alternate CTA state sets remain present with no material structural conflict.
- This specification converts approved requirements and design intent into observable outcomes. It does not choose implementation architecture or treat the three Figma frame widths as CSS breakpoint thresholds.
- There is no user-entered, persisted, fetched, authenticated, or server-owned application data in scope, so no `SPEC-DATA-*` item is required.

### SPEC-BEH-001 — Render one complete landing page with approved content

- **Requirement and design references:** `REQ-FR-001`, `REQ-FR-002`, `REQ-FR-005`, `REQ-NFR-001`; `DES-001`, `DES-002`, `DES-004`.
- **Source snapshots:** `SRC-DS-001`, `SRC-REPO-001`; `EVD-002`, `EVD-003`, `EVD-004`, `EVD-012`.
- **Observable behavior:**
  - One page presents the seven major content sections in this order: Hero → Read Together → Community → Reading Journey → Membership Options → Testimonial → Footer.
  - The visible headings, descriptive copy, benefit lists, four journey steps, Starter/Pro/Enterprise names, prices, plan benefits, CTA labels, social-proof message, testimonial, attribution, and footer copy match the approved source.
  - Social proof appears in both the hero and footer contexts.
  - Until an approved upstream content decision changes it, the footer copyright remains the literal source value `© 2024 – Tech Book Club`; it is not silently made dynamic.
- **States and edge cases:** Approved text may wrap as available width or user text sizing changes. Content is not ellipsized, line-clamped, clipped, or omitted to preserve an exact Figma line break. Cards and sections grow vertically when needed.
- **Acceptance criteria:** `AC-001`, `AC-002`, `AC-003`, `AC-004`, `AC-010`, `AC-021`, `AC-024`.

### SPEC-BEH-002 — Reproduce the approved responsive compositions and usable interpolation

- **Requirement and design references:** `REQ-FR-003`, `REQ-AR-001`, `REQ-AR-005`, `REQ-NFR-001`; `DES-RWD-001`, `DES-RWD-002`, `DES-RWD-003`, `DES-RWD-004`.
- **Source snapshots:** `SRC-DS-001`; `EVD-002`, `EVD-003`, `EVD-004`, `EVD-005`; `AUD-001`.
- **Observable behavior:**
  - At a 1440 px viewport, the major layout matches the supplied desktop composition: hero in two columns; Read Together image-left/text-right; Community text-left/image-right; Reading Journey horizontal; three membership cards in one row; testimonial centered; desktop footer arrangement.
  - At a 768 px viewport, the major layout matches the supplied tablet composition: hero content before its image; Read Together text/checklist before its image; Community text before its image; Reading Journey vertical; Membership Options in two columns with Enterprise wrapped beneath; testimonial left-aligned; tablet footer arrangement.
  - At a 375 px viewport, the major layout matches the supplied mobile composition: stacked hero/editorial sections in text-first order; vertical Reading Journey; one membership card per row in Starter → Pro → Enterprise order; left-aligned testimonial; mobile footer arrangement.
  - Between reference widths, the layout uses the widest reference-inspired arrangement that keeps text readable, controls usable, cards uncramped, and the page free of layout-caused horizontal scrolling. The layout simplifies before collision or clipping occurs.
  - Image presentation preserves the demonstrated crop/aspect intent without stretching.
- **States and edge cases:** 1024 px and 600 px are Stage 4 validation probes only, not CSS breakpoint thresholds. At those widths, all material content and controls remain available without overlap, clipping, or layout-caused horizontal page scrolling.
- **Acceptance criteria:** `AC-005`, `AC-006`, `AC-019`, `AC-021`, `AC-025`, `AC-026`.

### SPEC-BEH-003 — Keep the delivered experience static and free of unsupported product behavior

- **Requirement and design references:** `REQ-NFR-002`, `REQ-CON-005`; `DES-INT-003`.
- **Source snapshots:** `SRC-REPO-001`, `SRC-DS-001`; `AUD-009`.
- **Observable behavior:** The page requires no backend, persistence, authentication, checkout, subscription processing, contact processing, external API, modal, additional route, or authored animation to satisfy the approved behavior. Navigation and link states use native browser behavior where possible.
- **States and edge cases:** No loading, empty, success, error, disabled, selected, or application-managed pressed state is created for the static landing-page links. No entrance, looping, scroll-linked, or authored smooth-scroll motion is added solely for polish.
- **Acceptance criteria:** `AC-009`, `AC-022`, `AC-023`, `AC-027`.

### SPEC-INT-001 — Membership and plan CTA link behavior

- **Requirement and design references:** `REQ-FR-004`, `REQ-AR-002`; `DES-INT-001`.
- **Source snapshots:** `SRC-DS-001`; `EVD-006`, `EVD-007`; `AUD-002`, `AUD-003`, `AUD-004`, `AUD-009`; owner decision 2026-08-16.
- **Observable behavior:**
  - The Hero and Footer “Review membership options” controls are links with `href="#membership-options"` and target the Membership Options section whose fragment identifier is `membership-options`.
  - Starter and Pro “Subscribe now” and Enterprise “Talk to us” are links whose `href` value is exactly `#`.
  - Placeholder links do not call an API, open a modal, navigate to another route, submit a form, or expose an external destination. Their activation otherwise retains normal browser handling for the literal fragment value.
  - Primary-context CTA links reproduce the supplied Primary Button default and hover appearances; the footer membership link reproduces the supplied Alternate Button default and hover appearances.
  - Keyboard focus on CTA links is clearly visible and follows the corresponding supplied focus-state visual intent.
- **States and edge cases:** There is no authored disabled/loading/success/error/selected state. Native transient link activation does not create a persistent product state.
- **Acceptance criteria:** `AC-007`, `AC-008`, `AC-009`, `AC-013`, `AC-014`, `AC-028`.

### SPEC-INT-002 — Social-link behavior

- **Requirement and design references:** `REQ-AR-002`, `REQ-AR-004`; `DES-INT-002`.
- **Source snapshots:** `SRC-DS-001`; `AUD-005`; `150:878`, `150:879`; owner decision 2026-08-16.
- **Observable behavior:** Bluesky and LinkedIn are separate icon-only links with `href="#"`. They expose the accessible names “Bluesky” and “LinkedIn” respectively, are reachable and activatable with the keyboard, and have a clearly visible focus indication. No external profile behavior is added.
- **States and edge cases:** Figma supplies no social-link hover/focus variant. Any hover treatment may only provide nonessential visual feedback and may not be the sole means of identifying the link. Focus remains visible independently of hover.
- **Acceptance criteria:** `AC-017`, `AC-018`, `AC-029`.

### SPEC-ACC-001 — Semantic document structure and reading order

- **Requirement and design references:** `REQ-AR-001`, `REQ-FR-001`; `DES-001`, `DES-RWD-002`.
- **Source snapshots:** `SRC-DS-001`, `SRC-REPO-001`; `EVD-012`.
- **Observable behavior:**
  - The rendered document exposes one primary page heading for “Join the ultimate tech book club”.
  - Major content sections use a coherent descending heading structure; membership-plan names are subordinate to the Membership Options heading.
  - Page landmarks distinguish the introductory/header content, primary content, and footer content without redundant landmark nesting.
  - Reading Journey is exposed as an ordered four-step sequence. Feature/benefit groups whose order is not semantically significant are exposed as lists where appropriate.
  - DOM and assistive-technology reading order follows the approved top-to-bottom narrative and the text-first responsive intent. Desktop visual positioning does not place image content earlier in the accessibility reading order than its related heading/copy.
- **States and edge cases:** Responsive CSS may move visual columns, but it does not produce a contradictory tab or screen-reader order.
- **Acceptance criteria:** `AC-011`, `AC-012`, `AC-030`.

### SPEC-ACC-002 — Accessible visual semantics

- **Requirement and design references:** `REQ-AR-003`, `REQ-FR-005`; `DES-003`.
- **Source snapshots:** `SRC-DS-001`; `EVD-005`, `EVD-010`, `EVD-011`; `AUD-006`, `AUD-008`.
- **Observable behavior:**
  - Hero, reading-group, and community photographs are treated as decorative/context-setting visuals because adjacent text carries the material message; when rendered as image elements they use empty alternative text, and when rendered as CSS/decorative artwork they are not exposed as meaningful accessibility content.
  - Member-avatar artwork is decorative; the adjacent “200+ developers joined already” text carries the social-proof count.
  - Background patterns, glow, journey arrows, circle marks, check icons, and the technology-logo cluster are decorative and do not add redundant announcements.
  - The Tech Book Club brand identity exposes “Tech Book Club” once; visual logo subparts do not create duplicate announcements.
  - Five-star rating groups, where they communicate rating/social-proof meaning, expose one concise rating equivalent rather than five separately announced star icons.
- **States and edge cases:** Decorative-classification choices must remain explicit if the implementation changes the rendering technique for an asset.
- **Acceptance criteria:** `AC-015`, `AC-016`, `AC-031`.

### SPEC-ACC-003 — Keyboard, focus, reflow, and readable visual states

- **Requirement and design references:** `REQ-AR-002`, `REQ-AR-004`, `REQ-AR-005`; `DES-004`, `DES-RWD-004`, `DES-INT-001`, `DES-INT-002`.
- **Source snapshots:** `SRC-DS-001`, `SRC-REPO-001`; `EVD-006`; `AUD-001`, `AUD-003`, `AUD-005`.
- **Observable behavior:**
  - Every interactive element is reachable through sequential keyboard navigation in meaningful DOM order and activates using native link keyboard behavior.
  - Focus is never hidden by an authored style; each CTA and icon-only social link has a clearly visible focus indication on its light or dark background.
  - No keyboard trap or custom focus-management flow exists.
  - At 320 CSS px viewport width and during a 200% browser zoom check at a representative desktop viewport, material content and controls remain available without overlap, clipping, or layout-caused two-dimensional page scrolling.
  - Implemented text and interactive-state contrast is explicitly checked before acceptance; any detected insufficient-contrast state is corrected or treated as blocking rather than waived silently.
- **States and edge cases:** Exact Figma line breaks are not acceptance requirements under zoom/reflow. Content preservation and operability take precedence when typography wraps differently.
- **Acceptance criteria:** `AC-013`, `AC-014`, `AC-018`, `AC-019`, `AC-020`, `AC-032`, `AC-033`.

### SPEC-VAL-001 — Required validation matrix

- **Requirement and design references:** All Must requirements; `DES-001` through `DES-004`, `DES-RWD-001` through `DES-RWD-004`, `DES-INT-001` through `DES-INT-003`.
- **Source snapshots:** `SRC-DS-001`, `SRC-REPO-001`.
- **Observable behavior:** Acceptance requires evidence from all applicable checks below rather than visual inspection alone:
  - production Astro build;
  - rendered visual comparison at 1440 px, 768 px, and 375 px against the approved Figma references;
  - intermediate-width layout probes at 1024 px and 600 px;
  - narrow/reflow probe at 320 CSS px and a 200% browser zoom check;
  - keyboard traversal and activation of every link;
  - semantic/accessible-name inspection for headings, landmarks, lists, images/decorative visuals, rating groups, and icon-only social links;
  - explicit contrast inspection for text and interactive states;
  - implementation inspection confirming no unsupported product flow and no unnecessary client-side JavaScript.
- **States and edge cases:** A check recorded as not executed does not count as passing. A material discrepancy or accessibility failure remains blocking until corrected or explicitly returned to the owning upstream stage for an approved decision.
- **Acceptance criteria:** `AC-020`, `AC-021`, `AC-022`, `AC-023`, `AC-034`.

### SPEC-VAL-002 — Source-change and failure handling

- **Requirement and design references:** `REQ-CON-004`, `REQ-CON-005`; Stage 3 source-change intent.
- **Source snapshots:** `SRC-DS-001`, `SRC-REPO-001`.
- **Observable behavior:** If the time-bound Figma source changes materially before implementation/validation, the workflow records a new source snapshot and impact assessment and returns to the earliest affected owning stage. Missing or unusable approved assets are not silently substituted with unrelated imagery. Validation failures are corrected and rerun; they are not converted into passing evidence by narrative alone.
- **States and edge cases:** A source outage or unexpected upstream/concurrent change blocks dependent material work until verification can be restored or the source change is explicitly handled.
- **Acceptance criteria:** `AC-035`.

### Stage 4 acceptance criteria added by specification

- `AC-024`: Unless an approved upstream content change exists, the rendered footer shows the literal text `© 2024 – Tech Book Club`.
- `AC-025`: At a 1024 px viewport, all seven sections and all controls remain available with no overlap, clipping, or layout-caused horizontal page scrolling.
- `AC-026`: At a 600 px viewport, all seven sections and all controls remain available with no overlap, clipping, or layout-caused horizontal page scrolling.
- `AC-027`: The rendered page has no authored entrance, looping, scroll-linked, or smooth-scroll animation required for the approved experience.
- `AC-028`: Hero and footer membership-review links use `href="#membership-options"`, and the Membership Options section exposes the matching `membership-options` fragment target.
- `AC-029`: Bluesky and LinkedIn icon links have distinct accessible names and visible keyboard focus while retaining literal `href="#"` placeholders.
- `AC-030`: Responsive visual reordering does not create a DOM/tab/screen-reader order that contradicts the approved top-to-bottom and text-first reading sequence.
- `AC-031`: Decorative photographs/artwork/icons are not redundantly announced; the brand identity and star-rating meaning are exposed once where meaningful.
- `AC-032`: At 320 CSS px viewport width, no material content or interactive control is lost through overlap, clipping, or layout-caused horizontal scrolling.
- `AC-033`: At 200% browser zoom on a representative desktop viewport, all material content and interactive controls remain available and operable without overlap or clipping.
- `AC-034`: Each required validation category in `SPEC-VAL-001` has executed evidence before final acceptance; “not executed” is not a passing result.
- `AC-035`: A material change to `SRC-DS-001` or an unexpected source verification result triggers explicit source-change handling before dependent implementation continues.

### Stage 4 review pass 1 — Completeness and correctness

- [x] All approved functional, responsive, interaction, accessibility, visual-fidelity, and lightweight-static-page requirements have testable specification coverage.
- [x] CTA destinations and placeholder behavior are precise, including the exact `#membership-options` fragment and literal `#` placeholder values.
- [x] Reference-width behavior is explicit at 1440 px, 768 px, and 375 px; 1024 px and 600 px are clearly identified as validation probes rather than breakpoint thresholds.
- [x] Keyboard, focus, semantic structure, visual semantics, reflow, zoom, contrast inspection, and no-motion behavior are integrated rather than deferred to a late accessibility phase.
- [x] No backend, dynamic data, unsupported business state, arbitrary CSS breakpoint, or external destination was invented.

### Corrections from Stage 4 review pass 1

- Defined the exact in-page fragment as `membership-options` so the owner-approved membership navigation is directly testable.
- Kept the literal 2024 copyright as the current source behavior unless an approved upstream content decision supersedes it, rather than silently making the year dynamic.
- Added validation-only probes at 1024 px and 600 px to test intermediate interpolation without asserting implementation breakpoint values.
- Added explicit 320 CSS px and 200% zoom probes for reflow robustness while preserving the rule that exact Figma line breaks are not required under accessibility reflow.
- Added one accessible equivalent for meaningful five-star groups while keeping decorative icon repetition out of the accessibility tree.
- Made source-change and validation-failure recovery observable instead of treating failures as narrative-only risks.

### Stage 4 review pass 2 — Consistency, traceability, source integrity, risks, and uncertainty

- [x] Every `SPEC-*` item references approved requirements/design intent and active source snapshots.
- [x] New `AC-024` through `AC-035` are unique, observable, and do not contradict Stage 2 acceptance criteria.
- [x] The mutable Figma input was reverified immediately before Stage 4 specification work; no material structural conflict was detected.
- [x] Exact CSS breakpoint thresholds remain an implementation decision driven by observed failure points, not an invented specification fact.
- [x] Placeholder links remain explicitly incomplete product destinations; no hidden flow is implied.
- [x] Asset licensing remains a non-blocking project risk; specification does not assert licensing evidence that has not been established.
- [x] No Stage 4 blocking product decision remains.

### Stage 4 readiness

`Ready for Stage 4 gated approval` — specification is complete and testable for the current Lite scope. Per Gated execution mode, do not advance to Stage 5 until the project owner explicitly approves Stage 4.

## 5. Repository Context

Stage 7 repository inspection completed on 2026-08-16 against `SRC-REPO-001` plus the current workflow branch lineage. The immutable repository input remains the application baseline: subsequent repository differences are workflow/documentation outputs, and `frontend/` is still the unimplemented Astro starter.

### Existing repository state

- Toolchain: Astro + TypeScript in `frontend/`, Node.js `24.x`, pnpm `10.28.0`, Astro `^7.2.2`.
- Existing route: `frontend/src/pages/index.astro` is the only page and currently composes `Layout.astro` with the stock `Welcome.astro` starter.
- Existing layout: `frontend/src/layouts/Layout.astro` contains starter metadata/title/favicon references plus only a minimal page reset.
- Existing components/assets: `frontend/src/components/Welcome.astro`, `frontend/src/assets/astro.svg`, and `frontend/src/assets/background.svg` are Astro starter content, not reusable Tech Book Club implementation assets.
- Existing public assets: only the starter favicon files are present.
- Existing tests: no project test suite or browser-test dependency is present.
- Deployment: `frontend/vercel.json` uses `ignoreCommand: "git diff --quiet HEAD^ HEAD ./"`, so documentation/workflow-only commits should not build the frontend.
- Nested instructions: `frontend/AGENTS.md` requires background-mode Astro development; root `AGENTS.md` requires the local modern-web-guidance skill before HTML/CSS/client-side JavaScript implementation.

### Proposed implementation structure

Existing files to modify or remove:

- `frontend/src/pages/index.astro` — replace the starter page composition with the seven approved sections.
- `frontend/src/layouts/Layout.astro` — replace starter metadata and global page setup; import project global styles.
- `frontend/src/components/Welcome.astro` — remove after the real page composition replaces it.
- `frontend/src/assets/astro.svg` and `frontend/src/assets/background.svg` — remove starter-only assets.
- `frontend/public/favicon.ico` and `frontend/public/favicon.svg` — remove or replace only if an approved Tech Book Club brand favicon asset is available; do not ship Astro branding.

Proposed files/directories:

- `frontend/src/styles/global.css` — reset/base rules, CSS custom properties derived from approved Figma styles/variables, typography roles, global focus/reflow defaults, and shared page-container behavior.
- `frontend/src/components/Brand.astro` — reusable Tech Book Club brand treatment when the source requires the identity in more than one context.
- `frontend/src/components/ButtonLink.astro` — Primary/Alternate link variants with source-matched default/hover/focus treatment and native anchor semantics.
- `frontend/src/components/SocialProof.astro` — reusable avatar/rating/message pattern with one accessible rating equivalent.
- `frontend/src/components/MembershipCard.astro` — reusable Starter/Pro/Enterprise card structure driven by explicit Astro props, without client-side state.
- `frontend/src/components/Hero.astro`
- `frontend/src/components/ReadTogether.astro`
- `frontend/src/components/Community.astro`
- `frontend/src/components/ReadingJourney.astro`
- `frontend/src/components/MembershipOptions.astro`
- `frontend/src/components/Testimonial.astro`
- `frontend/src/components/Footer.astro`
- `frontend/src/assets/tech-book-club/` — approved local image/vector/font assets exported or obtained from the scoped Figma source using semantic filenames; no unrelated substitute imagery.

Component boundaries follow repeated semantics or the approved section-component structure. Do not create abstractions that have only speculative reuse.

### Commands and dependency policy

Run from `frontend/` unless noted otherwise:

- `corepack enable` — use the package-manager version declared by the repository.
- `pnpm install --frozen-lockfile` — install the pinned dependency graph when needed.
- `pnpm build` — required production Astro build validation.
- `pnpm astro dev --background` — start local development per `frontend/AGENTS.md`; use the corresponding `status`, `logs`, and `stop` commands for the background server.
- Before the first HTML/CSS/client-side JavaScript implementation task, run the repository-mandated modern-web-guidance search/retrieve flow from `.agents/skills/modern-web-guidance/SKILL.md` for the specific responsive layout, image-loading/performance, and accessible interaction work being implemented.

No new runtime dependency or client framework is planned. Keep the page server-rendered/static Astro with no hydration unless an approved requirement later proves client JavaScript necessary. Do not add a test framework merely for ceremony; Stage 10/11 validation may use the available browser/preview tooling plus the repository build unless implementation discovers a repeatable check that justifies a scoped dev dependency.

### Constraints and technical debt

- The implementation begins from stock starter markup/styles, so starter content must be replaced rather than adapted into production components.
- Exact CSS breakpoint thresholds are intentionally not predetermined; choose them during implementation at observed layout/content failure points while reproducing 1440/768/375 reference states and passing 1024/600/320 probes.
- Supplied image/member-portrait production licensing remains a documented non-blocking product/content risk; implementation must not assert licensing that has not been confirmed.
- The two transient direct-to-`main` placeholder writes made during Stage 7 setup were immediately reversed and produced no net application-tree change. They are recorded as a corrected workflow deviation in `WORKFLOW-STATE.md` and are not implementation input.

## 6. Implementation Plan

Stage 7 plan is repository-aware and keeps accessibility, responsive behavior, states, content edges, and validation inside the work that creates each behavior. `PLAN-006` is a verification/refinement pass, not a late phase for adding missing semantics or responsiveness.

### PLAN-001 — Establish approved assets and global visual foundation

- **Objective:** Replace Astro-starter visual foundations with the approved Tech Book Club source assets and a minimal global CSS foundation derived from the audited Figma system.
- **Requirement and specification references:** `REQ-FR-002`, `REQ-AR-003`, `REQ-NFR-001`, `REQ-NFR-002`, `REQ-CON-001`, `REQ-CON-004`, `REQ-CON-005`; `SPEC-ACC-002`, `SPEC-VAL-001`, `SPEC-VAL-002`.
- **Source snapshots:** `SRC-DS-001`, `SRC-REPO-001`.
- **Files and modules:** Modify `frontend/src/layouts/Layout.astro`; create `frontend/src/styles/global.css` and `frontend/src/assets/tech-book-club/`; remove starter-only Astro assets/favicons when no longer referenced.
- **Dependencies:** Existing Astro toolchain only. Run the required modern-web-guidance search/retrieve flow before HTML/CSS work. Obtain assets only from the approved Figma scope or an explicitly approved source.
- **Implementation steps:** Export/obtain the scoped logo, photographs, avatar/rating artwork, decorative patterns/glow/arrows/checks/technology artwork and any approved font files needed by the design; classify each as content-bearing or decorative according to `SPEC-ACC-002`; establish CSS custom properties from approved design values; set document metadata/title and global base/reflow/focus rules; remove unused starter branding.
- **Integrated accessibility, responsive, state, error, and test work:** Decorative assets are hidden from the accessibility tree at the rendering point; brand/rating meaning is exposed once; font/image loading must preserve readable fallbacks and avoid layout-breaking fixed dimensions; missing approved assets block the affected implementation rather than triggering unrelated substitutions.
- **Validation:** No remaining production reference to Astro starter imagery/branding; all planned project assets trace to the scoped source; global styles do not create horizontal overflow at 320 px; production build remains viable after foundation integration.
- **Risks:** Asset licensing remains non-blocking but unresolved; Figma asset export technique may require choosing between Astro image imports, inline SVG, or CSS decoration without changing semantics.

### PLAN-002 — Build the page shell, shared primitives, and Hero

- **Objective:** Create the semantic page shell and the reusable link/social-proof/brand primitives while implementing the Hero exactly enough to establish typography, spacing, imagery, CTA, and repeated social-proof patterns.
- **Requirement and specification references:** `REQ-FR-001`, `REQ-FR-002`, `REQ-FR-004`, `REQ-FR-005`, `REQ-AR-001`, `REQ-AR-002`, `REQ-AR-003`, `REQ-NFR-001`; `SPEC-BEH-001`, `SPEC-BEH-002`, `SPEC-INT-001`, `SPEC-ACC-001`, `SPEC-ACC-002`, `SPEC-ACC-003`.
- **Source snapshots:** `SRC-DS-001`, `SRC-REPO-001`.
- **Files and modules:** Modify `frontend/src/pages/index.astro`; create `Brand.astro`, `ButtonLink.astro`, `SocialProof.astro`, and `Hero.astro`.
- **Dependencies:** `PLAN-001` visual foundation/assets.
- **Implementation steps:** Compose the page shell from `index.astro` with non-redundant page-level `header`, `main`, and `footer` landmarks: Hero owns the introductory/header region, the substantive non-footer sections live under one `<main>`, and Footer owns the page footer; implement one visible H1; render the Hero content in source order; make “Review membership options” a native link to `#membership-options`; implement Primary link default/hover/focus styling; implement the hero social-proof pattern with decorative avatars and one rating equivalent; keep the DOM text-first even where desktop visually places imagery beside content.
- **Integrated accessibility, responsive, state, error, and test work:** Native links only; visible keyboard focus; no disabled/loading/custom pressed states; decorative hero imagery uses empty alt or CSS decoration as appropriate; Hero switches from desktop two-column to stacked layouts at observed failure points, not hard-coded device assumptions.
- **Validation:** Hero matches 1440/768/375 intent; 1024/600/320 probes preserve content; keyboard activates the in-page link; no duplicate brand/rating announcements; no client-side JavaScript is introduced.
- **Risks:** Exact typography/image crop can affect breakpoint failure points and must be tuned using rendered comparison rather than copied frame widths.

### PLAN-003 — Implement Read Together, Community, and Reading Journey

- **Objective:** Build the three narrative middle sections with correct reading order, lists, decorative imagery, and responsive transformations.
- **Requirement and specification references:** `REQ-FR-001`, `REQ-FR-002`, `REQ-FR-003`, `REQ-AR-001`, `REQ-AR-003`, `REQ-AR-005`, `REQ-NFR-001`; `SPEC-BEH-001`, `SPEC-BEH-002`, `SPEC-ACC-001`, `SPEC-ACC-002`, `SPEC-ACC-003`.
- **Source snapshots:** `SRC-DS-001`, `SRC-REPO-001`.
- **Files and modules:** Create `ReadTogether.astro`, `Community.astro`, and `ReadingJourney.astro`; compose them from `index.astro`.
- **Dependencies:** `PLAN-001` foundation/assets and `PLAN-002` page shell/shared primitives.
- **Implementation steps:** Implement the Read Together feature/check list and photograph; implement Community copy and technology artwork; implement Reading Journey as a semantic ordered four-step sequence with decorative connectors/marks; preserve approved section order and text-first DOM order while allowing desktop visual alternation through CSS.
- **Integrated accessibility, responsive, state, error, and test work:** Use semantic lists; keep all photography/technology artwork/connectors decorative per approved classification; ensure CSS visual reordering never contradicts DOM or tab order; allow text/cards/steps to grow vertically under zoom and wrapping; switch journey from horizontal to vertical before collision.
- **Validation:** Section composition and order match 1440/768/375 references; 1024/600/320 and 200% zoom checks have no overlap/clipping/layout-caused horizontal scrolling; semantics expose lists/ordered steps without redundant image announcements.
- **Risks:** Journey connectors and section imagery may need CSS/vector techniques that must remain purely decorative and robust under reflow.

### PLAN-004 — Implement Membership Options and Testimonial

- **Objective:** Build the membership comparison and testimonial with reusable membership-card structure, exact placeholder link behavior, and responsive card layouts.
- **Requirement and specification references:** `REQ-FR-001`, `REQ-FR-002`, `REQ-FR-003`, `REQ-FR-004`, `REQ-AR-001`, `REQ-AR-002`, `REQ-AR-005`, `REQ-NFR-001`; `SPEC-BEH-001`, `SPEC-BEH-002`, `SPEC-INT-001`, `SPEC-ACC-001`, `SPEC-ACC-003`.
- **Source snapshots:** `SRC-DS-001`, `SRC-REPO-001`.
- **Files and modules:** Create `MembershipCard.astro`, `MembershipOptions.astro`, and `Testimonial.astro`; compose from `index.astro`.
- **Dependencies:** `PLAN-001` visual foundation and `PLAN-002` `ButtonLink.astro`.
- **Implementation steps:** Add the `membership-options` fragment target; model Starter/Pro/Enterprise content as explicit static card props/data within Astro without runtime state; render plan benefit lists and the correct CTA labels; use literal `href="#"` for Subscribe/Talk links; reproduce Pro emphasis without changing semantic order; add testimonial quote/attribution and approved alignment behavior.
- **Integrated accessibility, responsive, state, error, and test work:** Membership names are subordinate headings under Membership Options; benefits are semantic lists; every CTA gets visible focus and only approved default/hover/focus states; cards form 3 columns at desktop, 2+1 at tablet, 1 column at mobile based on available space/failure points; long text grows rather than clips.
- **Validation:** Exact plan names/prices/benefits/labels and literal placeholder hrefs; no modal/form/API behavior; correct 3/2+1/1 transformations at reference widths and usable intermediate probes; keyboard/focus checks pass.
- **Risks:** Card visual emphasis and equal-height relationships must not force clipping when text reflows.

### PLAN-005 — Implement Footer and complete repeated link/social patterns

- **Objective:** Finish the page with the approved Footer, repeated membership CTA/social proof, social links, and literal source copyright while ensuring repeated patterns stay consistent.
- **Requirement and specification references:** `REQ-FR-001`, `REQ-FR-002`, `REQ-FR-004`, `REQ-FR-005`, `REQ-AR-002`, `REQ-AR-004`, `REQ-NFR-001`; `SPEC-BEH-001`, `SPEC-INT-001`, `SPEC-INT-002`, `SPEC-ACC-002`, `SPEC-ACC-003`.
- **Source snapshots:** `SRC-DS-001`, `SRC-REPO-001`.
- **Files and modules:** Create `Footer.astro`; reuse `Brand.astro`, `ButtonLink.astro`, and `SocialProof.astro`; compose from `index.astro`.
- **Dependencies:** `PLAN-001` assets; `PLAN-002` shared primitives.
- **Implementation steps:** Reproduce the dark footer composition; make footer “Review membership options” link target `#membership-options` using the Alternate visual variant; render footer social proof; render Bluesky/LinkedIn as separate icon-only anchors with literal `href="#"` and accessible names; retain literal `© 2024 – Tech Book Club` unless an upstream decision changes it.
- **Integrated accessibility, responsive, state, error, and test work:** Alternate CTA focus remains visible on dark background; icon-only social links have explicit names and focus styles; no external-profile behavior is invented; footer layout reflows without changing source order or dropping content.
- **Validation:** All footer text/links match specification; keyboard traversal reaches CTA and both social links in meaningful order; social links expose distinct names; footer matches reference states and remains usable at probes/zoom.
- **Risks:** Figma has no explicit social-link hover variant, so any hover feedback must remain nonessential and cannot replace visible focus.

### PLAN-006 — Integrate, verify, and refine against source and repository constraints

- **Objective:** Assemble all section components, remove remaining starter residue, execute the full approved validation matrix, and refine owning components until the branch is ready for Stage 11 acceptance evidence. This item verifies/corrects behavior already introduced by `PLAN-001`–`PLAN-005`; it must not become a catch-all phase for first-time accessibility or responsive implementation.
- **Requirement and specification references:** All Must requirements; `REQ-NFR-002`; `REQ-CON-003`, `REQ-CON-004`, `REQ-CON-005`, `REQ-CON-006`; `SPEC-VAL-001`, `SPEC-VAL-002`, `AC-020`–`AC-035`.
- **Source snapshots:** `SRC-DS-001`, `SRC-REPO-001`; task-start/output/runtime snapshots will be added by Stages 9–11.
- **Files and modules:** All implementation files touched by prior plan items; no unrelated refactors.
- **Dependencies:** `PLAN-001` through `PLAN-005` complete.
- **Implementation steps:** Ensure `index.astro` contains only the approved seven-section composition; remove `Welcome.astro` and unused starter assets; run production build; run local/background browser verification and then Vercel preview verification when implementation changes are pushed; compare rendered output to Figma at 1440/768/375; probe 1024/600/320 and 200% zoom; traverse every link by keyboard; inspect headings/landmarks/lists/accessible names/image semantics/rating semantics; inspect text and interactive-state contrast; confirm no unsupported motion/product flow/client JS. No data, schema, service, or runtime migration exists for this static-page scope; if a merged implementation introduces a production regression, rollback is the normal Git revert of the implementation merge/commit followed by the repository’s standard deployment path.
- **Integrated accessibility, responsive, state, error, and test work:** Failures are corrected in their owning component/style rather than waived; source drift triggers `SPEC-VAL-002`; no validation category is marked passed without evidence.
- **Validation:** `pnpm build`; rendered visual comparisons; intermediate/reflow/zoom probes; keyboard/focus; semantic/accessibility inspection; contrast; implementation inspection; Vercel preview tied to the implementation branch. Stage 11 records final acceptance evidence against the implementation-output and runtime snapshots.
- **Risks:** Production image licensing remains outside technical validation; any material Figma drift or unexpected concurrent frontend change blocks dependent work pending impact assessment.

### Stage 7 plan review 1 — Repository accuracy and implementability

- [x] Every existing path/command/dependency claim was checked against the current repository.
- [x] Existing and proposed files are distinguished explicitly.
- [x] The plan removes the Astro starter rather than treating it as reusable product UI.
- [x] No backend, client framework, hydration, state library, API, form flow, or new runtime dependency is introduced.
- [x] Breakpoint thresholds are selected during implementation from layout failure rather than copied from device/frame widths.

### Stage 7 plan review 2 — Coverage, ordering, and integrated quality

- [x] Every material section and repeated pattern has an owning plan item.
- [x] Accessibility, responsive behavior, interaction states, content edges, and failure handling are integrated into the work that creates them.
- [x] Validation is executable with the existing build plus browser/Figma/Vercel evidence; no uninstalled test command is presented as available.
- [x] Plan dependencies establish a viable order without a separate late accessibility or responsive cleanup phase.
- [x] The plan preserves all owner-approved placeholder/link behavior and the literal footer year.
- [x] No unresolved technical decision blocks task decomposition after Stage 8 review.

`Ready for Stage 7 gated approval` — repository-aware planning is complete. Stage 8 remains the required adversarial plan challenge/refinement checkpoint after owner approval; do not advance before the Stage 7 gate passes.

## 7. Architecture Decision

- Separate architecture needed: **No — Stage 6 recommends an explicit architecture skip.**
- Reason: Current repository evidence shows a single Astro page route, starter component/layout structure, Astro as the only application dependency, no configured Astro adapter/integration, and no backend, API, persistence, authentication, shared state, migration, or server-runtime requirement. The approved specification already constrains the experience to static links and content with no unsupported product flow.
- Evidence: `SRC-REPO-001`, `SRC-DS-001`, `frontend/package.json`, `frontend/src/pages/index.astro`, `frontend/astro.config.mjs`, `frontend/vercel.json`, `SPEC-BEH-003`, and `SPEC-VAL-001`.
- Structural handling without a separate artifact: semantic structure, link behavior, accessibility, responsive interpolation, and no-client-JavaScript expectations remain owned by the specification; Stage 7 will define the concrete component/file plan and validation commands.

### Stage 6 architecture review

- [x] No meaningful routing architecture is required; the approved implementation has one page route.
- [x] No shared application state, data ownership, API, persistence, authentication, authorization, or integration boundary exists in scope.
- [x] No migration, deployment topology, security/privacy boundary, reliability subsystem, or rollback design requires a separate architecture artifact.
- [x] Existing Astro/Vercel configuration is minimal and does not introduce server-runtime architecture.
- [x] The work remains within Lite profile limits.

`Ready for Stage 6 gated approval` — record the architecture skip only after explicit project-owner approval; do not advance to Stage 7 before that gate passes.

## 8. Source-change Handling

- Snapshot verification required before task execution: Yes for time-bound `SRC-DS-001`; repository task-start lineage must also be verified.
- Material changes that invalidate this brief: Material changes to scoped page content, section structure, CTA behavior, responsive intent, or repository constraints.
- Earliest workflow section or stage to revisit: The earliest owning stage affected by the source change.

Create new `SRC-*` IDs and perform an impact assessment rather than silently updating this brief to newer sources.

## 9. Risks, Assumptions, and Questions

### Blocking

- None at the Stage 7 implementation-planning checkpoint.

### Non-blocking

- The current specification intentionally renders the literal source copyright `© 2024 – Tech Book Club`; changing it to a newer or dynamic year requires an approved upstream content decision.
- Production-use/licensing confirmation for supplied photographs/member portraits remains unresolved; no licensing claim is introduced by the workflow.
- CSS breakpoint thresholds remain an implementation detail. Stage 4 defines exact reference states plus 1024 px and 600 px validation probes, not breakpoint numbers.
- Subscription/contact/social destinations remain intentionally out of scope and use `#` placeholders.
- Exact social-link hover styling is not supplied by Figma; only accessible naming and visible focus are required behavior.

## 10. Traceability

| Snapshot or evidence | Requirement | Design | Specification or criterion | Plan item | Validation |
|---|---|---|---|---|---|
| `EVD-002`, `EVD-003`, `EVD-004`, `EVD-012` | `REQ-FR-001`, `REQ-FR-002`, `REQ-FR-003`, `REQ-NFR-001` | `DES-001`, `DES-002`, `DES-004`, `DES-RWD-001`, `DES-RWD-002`, `DES-RWD-003`, `DES-RWD-004` | `SPEC-BEH-001`, `SPEC-BEH-002`; `AC-024`–`AC-026` | `PLAN-001`–`PLAN-006` | `SPEC-VAL-001`; pending Stage 11 execution |
| `EVD-005` | `REQ-FR-003`, `REQ-FR-005` | `DES-001`, `DES-003`, `DES-RWD-002`, `DES-RWD-003` | `SPEC-BEH-001`, `SPEC-BEH-002`, `SPEC-ACC-002`; `AC-031` | `PLAN-002`, `PLAN-005`, `PLAN-006` | `SPEC-VAL-001`; pending Stage 11 execution |
| `EVD-006`, `EVD-007`, `AUD-002`, `AUD-003`, `AUD-009`; owner decision 2026-08-16 | `REQ-FR-004`, `REQ-AR-002` | `DES-INT-001`, `DES-INT-003` | `SPEC-INT-001`, `SPEC-BEH-003`; `AC-027`, `AC-028` | `PLAN-002`, `PLAN-004`, `PLAN-005`, `PLAN-006` | `SPEC-VAL-001`; pending Stage 11 execution |
| `EVD-010`, `EVD-011`, `AUD-006` | `REQ-AR-003` | `DES-003` | `SPEC-ACC-002`; `AC-031` | `PLAN-001`–`PLAN-006` | `SPEC-VAL-001`; pending Stage 11 execution |
| `AUD-005`; owner decision 2026-08-16 | `REQ-AR-004` | `DES-INT-002` | `SPEC-INT-002`, `SPEC-ACC-003`; `AC-029` | `PLAN-005`, `PLAN-006` | `SPEC-VAL-001`; pending Stage 11 execution |
| `SRC-REPO-001` | `REQ-AR-001`, `REQ-AR-002`, `REQ-AR-005`, `REQ-NFR-002`, `REQ-CON-001`, `REQ-CON-003`, `REQ-CON-006` | `DES-003`, `DES-004`, `DES-RWD-002`, `DES-RWD-004`, `DES-INT-001`, `DES-INT-002`, `DES-INT-003` | `SPEC-BEH-003`, `SPEC-ACC-001`, `SPEC-ACC-003`, `SPEC-VAL-001`; `AC-030`, `AC-032`–`AC-034` | `PLAN-001`–`PLAN-006` | `SPEC-VAL-001`; pending Stage 11 execution |
| `SRC-DS-001`, `SRC-REPO-001` | `REQ-CON-002`, `REQ-CON-004`, `REQ-CON-005` | `DES-RWD-001`, `DES-INT-001`, `DES-INT-003` | `SPEC-VAL-002`; `AC-035` | `PLAN-001`, `PLAN-006` | Source re-verification required before affected implementation/acceptance work |

## 11. Review Pass 1 — Completeness and Correctness

Stage 5 reviews the approved Stage 1–4 documentation before architecture/planning. Per the normative Lite workflow, implementation planning is intentionally not required until Stage 7 and Review Pass 2 remains a Stage 8 activity.

- [x] Scope and pinned repository context are accurate after correcting stale present-tense Stage 0 branch wording.
- [x] `SRC-DS-001` and `SRC-REPO-001` exist, are active, and were reverified before this review; the current Figma structure is materially unchanged and the immutable repository baseline remains an ancestor with no intervening `frontend/` implementation changes.
- [x] Requirements, design intent, and testable specification are complete for the pre-planning Lite scope; repository-aware implementation planning remains intentionally pending Stage 7.
- [x] Responsive behavior, accessibility, link states, content edge cases, source-change handling, and validation requirements are integrated into the owning Stage 2–4 sections rather than deferred to cleanup.
- [x] Unsupported backend/product flows, arbitrary breakpoint thresholds, unsupported motion, and unsupported application states are kept out of scope.
- [x] Downstream owner-approved decisions now have explicit dispositions where the Stage 1 audit originally recorded open questions, without rewriting those decisions as Figma evidence.
- [x] The work still qualifies for Lite: one static page, no persistence/authentication/API/shared-state/migration concern, and no newly discovered architecture trigger.

## 12. Corrections from Pass 1

- Fixed malformed `DESIGN-AUDIT.md` frontmatter by restoring the missing `baseline:` owner key.
- Replaced Standard-profile `REQUIREMENTS.md` / `DESIGN.md` / `SPEC.md` references in the Lite design audit with `IMPLEMENTATION-BRIEF.md`.
- Converted stale Stage 1 open-question wording into source-question plus downstream-disposition wording for CTA/social destinations, interaction states, footer year, responsive interpolation, and image semantics; asset licensing remains explicitly unresolved and non-blocking.
- Clarified `PROJECT-CONTEXT.md` so the Stage 0 initialization branch is historical and current workflow state is not duplicated outside the canonical record.
- Marked the original static-page scope assumption as confirmed by approved Stages 2–4 and made the Stage 0 workflow summary explicitly historical.
- Updated stale “later Stage 3/4” language in the brief so resolved visual semantics and responsive interpolation decisions are reflected without inventing fixed CSS breakpoints.
- Corrected the Lite review checklist so Stage 5 does not falsely require the Stage 7 implementation plan to exist.
- Reverified the time-bound Figma input and immutable repository input before completing this review; no material source drift requiring rebaseline was found.

### Stage 5 readiness

`Ready for architecture and planning`

## 13. Review Pass 2 — Consistency, Traceability, Source Integrity, Risks, and Uncertainty

Stage 8 adversarial review completed on 2026-08-16 against the active input baselines plus current source/repository evidence. The review challenges the Stage 7 plan without redefining `SRC-DS-001` or `SRC-REPO-001`.

### Stage 8 source and repository re-verification

- Connected Figma inspection confirmed `🤖 Workflow` (`2142:363`) still contains the same 1440 px desktop (`2142:1298`), 768 px tablet (`2142:1911`), 375 px mobile (`2142:2091`), reusable section components, CTA state components, style-guide structures, and visual assets used by the approved audit and plan. No material source drift was detected.
- GitHub comparison from immutable input commit `82471d57b717786adc9c2f9a83cd6a5cd696768f` to current pre-Stage-8 `main` commit `9c6c824c4deba225b90fb0dc83aab262c65dfb05` shows expected workflow/documentation output and no `frontend/` implementation changes.
- Current repository inspection reconfirmed `frontend/src/pages/index.astro`, `frontend/src/layouts/Layout.astro`, and `frontend/src/components/Welcome.astro` remain the stock Astro starter; `frontend/package.json` still declares pnpm `10.28.0`, Node `24.x`, and Astro `^7.2.2`; `astro.config.mjs` remains minimal; `frontend/vercel.json` retains the frontend-directory ignore command.
- The Stage 6 architecture skip remains valid: the approved scope still has one static page, no backend/API/persistence/authentication/shared application state, no migration, and no server-runtime architecture concern.

### Stage 8 corrections

- Tightened `PLAN-002` so the semantic page shell explicitly owns non-redundant `header`, `main`, and `footer` landmarks rather than ambiguously describing the whole page as one `<main>` flow. This aligns planning with `SPEC-ACC-001` before implementation begins.
- Corrected `PLAN-003` ordering so it depends on both the visual foundation (`PLAN-001`) and the page shell/shared primitives (`PLAN-002`) before composing middle sections into `index.astro`.
- Made `PLAN-006` migration and rollback handling explicit: no data/schema/service/runtime migration exists for this scope, and a production regression is rolled back through a normal Git revert plus the standard deployment path.
- No plan item was expanded into an unsupported route, flow, API, state system, client framework, test framework, animation system, or external destination.

### Review checklist

- [x] Ownership sections and identifier namespaces remain distinct; Stage 8 corrections stay inside the plan/review responsibilities of this Lite brief.
- [x] Every material plan item maps to approved requirements/specifications and the active source baselines.
- [x] No source changed silently after the brief baseline was recorded; current Figma evidence is materially unchanged and repository differences are expected workflow/documentation outputs only.
- [x] No unsupported scope or assumption is presented as confirmed.
- [x] Blocking questions are visible; none remain for task decomposition.
- [x] Corrections from Review Pass 1 remain included before this second pass.
- [x] Plan ordering and dependencies are executable after the `PLAN-003` dependency correction.
- [x] Accessibility, responsive behavior, interaction states, content edges, and failure handling remain integrated into the plan items that create them rather than deferred to final cleanup.
- [x] Required validation is feasible with the existing `pnpm build`, background Astro dev workflow, browser inspection, connected Figma evidence, and Vercel preview verification; no uninstalled test command is claimed.
- [x] Migration, security/privacy, deployment, rollback, regression, and profile-upgrade risk were challenged; none introduces a blocking architecture or profile change for the approved static-page scope.

## 14. Readiness

`Ready for task decomposition`

The adversarial Stage 8 review found no unresolved technical or product decision after the corrections above. The documented image/member-portrait licensing question and unspecified nonessential social-link hover treatment remain non-blocking risks already bounded by the approved specification. Because execution mode is Gated, do not advance to Stage 9 until the project owner explicitly approves Stage 8.
