from pathlib import Path


def replace_between(text: str, start: str, end: str, replacement: str) -> str:
    start_index = text.find(start)
    if start_index < 0:
        raise SystemExit(f'Missing start marker: {start}')
    end_index = text.find(end, start_index + len(start))
    if end_index < 0:
        raise SystemExit(f'Missing end marker: {end}')
    return text[:start_index] + replacement.rstrip() + '\n\n' + text[end_index + 1:]


brief_path = Path('IMPLEMENTATION-BRIEF.md')
brief = brief_path.read_text(encoding='utf-8')

repository_context = '''## 5. Repository Context

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
'''

implementation_plan = '''## 6. Implementation Plan

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
- **Implementation steps:** Compose one `<main>` content flow from `index.astro`; implement one visible H1; render the Hero content in source order; make “Review membership options” a native link to `#membership-options`; implement Primary link default/hover/focus styling; implement the hero social-proof pattern with decorative avatars and one rating equivalent; keep the DOM text-first even where desktop visually places imagery beside content.
- **Integrated accessibility, responsive, state, error, and test work:** Native links only; visible keyboard focus; no disabled/loading/custom pressed states; decorative hero imagery uses empty alt or CSS decoration as appropriate; Hero switches from desktop two-column to stacked layouts at observed failure points, not hard-coded device assumptions.
- **Validation:** Hero matches 1440/768/375 intent; 1024/600/320 probes preserve content; keyboard activates the in-page link; no duplicate brand/rating announcements; no client-side JavaScript is introduced.
- **Risks:** Exact typography/image crop can affect breakpoint failure points and must be tuned using rendered comparison rather than copied frame widths.

### PLAN-003 — Implement Read Together, Community, and Reading Journey

- **Objective:** Build the three narrative middle sections with correct reading order, lists, decorative imagery, and responsive transformations.
- **Requirement and specification references:** `REQ-FR-001`, `REQ-FR-002`, `REQ-FR-003`, `REQ-AR-001`, `REQ-AR-003`, `REQ-AR-005`, `REQ-NFR-001`; `SPEC-BEH-001`, `SPEC-BEH-002`, `SPEC-ACC-001`, `SPEC-ACC-002`, `SPEC-ACC-003`.
- **Source snapshots:** `SRC-DS-001`, `SRC-REPO-001`.
- **Files and modules:** Create `ReadTogether.astro`, `Community.astro`, and `ReadingJourney.astro`; compose them from `index.astro`.
- **Dependencies:** `PLAN-001` foundation/assets.
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
- **Implementation steps:** Ensure `index.astro` contains only the approved seven-section composition; remove `Welcome.astro` and unused starter assets; run production build; run local/background browser verification and then Vercel preview verification when implementation changes are pushed; compare rendered output to Figma at 1440/768/375; probe 1024/600/320 and 200% zoom; traverse every link by keyboard; inspect headings/landmarks/lists/accessible names/image semantics/rating semantics; inspect text and interactive-state contrast; confirm no unsupported motion/product flow/client JS.
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
'''

brief = replace_between(brief, '## 5. Repository Context\n', '\n## 6. Implementation Plan\n', repository_context)
brief = replace_between(brief, '## 6. Implementation Plan\n', '\n## 7. Architecture Decision\n', implementation_plan)
brief = brief.replace('- None at the Stage 6 architecture checkpoint.', '- None at the Stage 7 implementation-planning checkpoint.', 1)
brief = brief.replace('| Pending Stage 7 |', '| `PLAN-001`–`PLAN-006` |', 1)
brief = brief.replace('| Pending Stage 7 |', '| `PLAN-002`, `PLAN-005`, `PLAN-006` |', 1)
brief = brief.replace('| Pending Stage 7 |', '| `PLAN-002`, `PLAN-004`, `PLAN-005`, `PLAN-006` |', 1)
brief = brief.replace('| Pending Stage 7 |', '| `PLAN-001`–`PLAN-006` |', 1)
brief = brief.replace('| Pending Stage 7 |', '| `PLAN-005`, `PLAN-006` |', 1)
brief = brief.replace('| Pending Stage 7 |', '| `PLAN-001`–`PLAN-006` |', 1)
brief = brief.replace('| Pending Stage 7 |', '| `PLAN-001`, `PLAN-006` |', 1)
brief_path.write_text(brief, encoding='utf-8')

state_path = Path('WORKFLOW-STATE.md')
state = state_path.read_text(encoding='utf-8')
needle = '| EXC-001 | Initialize canonical workflow state through the repository CLI | A temporary one-shot GitHub Actions workflow was used to execute the CLI because the active runtime could not clone the repository directly | Preserved CLI-owned initialization rather than fabricating `.workflow/` manually | No application-code impact; temporary workflow removed itself after successful initialization | Resolved by self-removal and successful CLI validation/sync check | Corrected |'
if needle not in state:
    raise SystemExit('Missing EXC-001 row in WORKFLOW-STATE.md')
row = '| EXC-002 | Make repository/workflow changes on a dedicated branch before merging to `main` | During Stage 7 setup, two accidental placeholder writes were sent to `main` through the connector before branch creation was correctly selected; each was immediately deleted in the next commit | Connector-action misrouting while setting up the Stage 7 branch | No net application-tree or documentation change; production frontend content was never modified, but `main` history contains the create/revert pairs | Corrected immediately, explicitly disclosed to the project owner, and Stage 7 work resumed only after creating `workflow/stage-7-plan` | Corrected |'
state = state.replace(needle, needle + '\n' + row, 1)
state_path.write_text(state, encoding='utf-8')
