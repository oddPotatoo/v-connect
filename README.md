# Volunteer Connect

![Banner Image](assets/ocr-logo-land.png)

## 📌 Description

The OCR-Based Access Control System for Visitor Vehicle Entry in Gated Areas integrates these technologies to automate visitor verification through ID scanning. The system extracts essential data from valid IDs via OCR, and generates a unique QR code as a temporary access pass. Utilizing open-source and cost-efficient hardware, including a Raspberry Pi 4, cameras, thermal printer, and LCD display, the system provides a scalable, secure, and user-friendly solution. Its implementation is expected to reduce processing times, minimize human error, and improve both traffic flow and security in gated communities.

The web-based administrative dashboard was developed using the .NET framework. This dashboard serves as the primary interface for the system administrators to monitor visitor activity and view detailed logs. It connects securely to the PostgreSQL database and displays real-time data including current entries, exits, and pending sessions.

---

## 🖼️ Login UI
  <div align="center">
    <img src="assets/ocr_login_page.png" alt="UI Preview" width="600"/>
  </div>

## 🖼️ Dashboard UI
  <div align="center">
    <img src="assets/ocr_dashboard_page.png" alt="UI Preview" width="600"/>
    <img src="assets/ocr_dashboard_page_1.png" alt="UI Preview" width="600"/>
  </div>

## 🖼️ Non-Resident Logs UI
  <div align="center">
    <img src="assets/ocr_non-resident_logs_page.png" alt="UI Preview" width="600"/>
    <img src="assets/ocr_overdues_page.png" alt="UI Preview" width="600"/>
  </div>
  
---

## ✨ Features

- 📩 Real-time data synchronization using Firebase
- ⏱️ Displays real-time totals of daily, weekly, and monthly visitors with the current date and time.
- 📊 Visual infographics summarizing visitor statistics, including charts for daily, weekly, and monthly trends.
- ▶️ Automatic calculation and display of peak visiting hours, providing insights into high-traffic periods.
- 🪵 Shows all visitor logs along with their status: Still Inside, Exited, or Overdue Stay. The system also displays the duration of their stay in days, hours, and seconds.
- ✅ Provides separate navigation tabs for viewing Time-In, Time-Out, and Overdue records.
- 📃 Supports pagination, date/time filtering, and search functionality by name or license plate number.
- 🪪 Presents entry and exit timestamps for each visitor session.
- 🔐 Requires admin login to access the dashboard and manage records securely.
