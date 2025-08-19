<style>
    :root {
      --bg: #f5f7fb;
      --card: #ffffff;
      --accent: #2563eb;
      --muted: #6b7280;
      --radius: 12px;
      font-family: "Noto Sans Bengali", system-ui, sans-serif;
    }
    body {
      margin: 0;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(180deg, var(--bg), #eef2ff);
      padding: 24px;
    }
    .card {
      width: 100%;
      max-width: 760px;
      background: var(--card);
      border-radius: var(--radius);
      box-shadow: 0 6px 30px rgba(16, 24, 40, 0.08);
      padding: 28px;
    }
    h1 {
      font-size: 24px;
      color: green;
      margin-bottom: 12px;
    }
    label {
      font-size: 14px;
      color: #0f172a;
    }
    .small {
      font-size: 13px;
      color: var(--muted);
    }
    @media (max-width: 680px) {
      form .row-cols-2 {
        grid-template-columns: 1fr !important;
      }
    }
  </style>
