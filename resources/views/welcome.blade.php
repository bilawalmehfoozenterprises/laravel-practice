<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-950 text-white antialiased">
    <main class="flex min-h-screen items-center justify-center px-6 py-12">
        <form class="w-full max-w-sm rounded-xl border border-slate-800 bg-slate-900 p-6 shadow-2xl shadow-black/20">
            <h1 class="mb-6 text-xl font-semibold tracking-tight">Laravel Practice</h1>

            <label for="message" class="sr-only">Message</label>
            <input
                id="message"
                type="text"
                placeholder="Type something..."
                class="mb-3 w-full rounded-lg border border-slate-700 bg-slate-950 px-4 py-3 text-sm text-white placeholder-slate-500 outline-none transition focus:border-white focus:ring-1 focus:ring-white"
            >
            <button
                type="button"
                class="w-full rounded-lg bg-white px-4 py-3 text-sm font-semibold text-slate-950 transition hover:bg-slate-200 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-slate-900"
            >
                Continue
            </button>
        </form>
    </main>
</body>
</html>