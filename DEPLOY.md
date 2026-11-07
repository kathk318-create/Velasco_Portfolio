# Deploying to Vercel

1. Install Vercel CLI: `npm i -g vercel`
2. Run `npm run build` to compile frontend assets into `public/build`, then commit `public/build` (Vercel's static builder deploys those files as-is; it cannot see files built by the PHP runtime).
3. Set environment variables in the Vercel dashboard (or via `vercel env add`):
   - `APP_KEY` (generate with `php artisan key:generate --show`)
   - `APP_ENV=production`
   - `APP_DEBUG=false`
   - `APP_URL=https://your-project.vercel.app`
4. Run `vercel` to deploy (or connect the GitHub repo in the Vercel dashboard).
5. Vercel will install Composer dependencies and run the build automatically.

## Manual steps after deploy
- Replace `public/resume/resume.pdf` with your real resume.
- Add screenshots to `public/images/projects/qr-attendance-1.png` and `qr-attendance-2.png`.
- Add certificate files to `public/certificates/`.
- Re-run `npm run build` and redeploy whenever frontend assets change.
