(function (factory) {
  typeof define === "function" && define.amd ? define(factory) : factory();
})(function () {
  "use strict";

  const camelize = (e) => {
    const t = e.replace(/[-_\s.]+(.)?/g, (e, t) => (t ? t.toUpperCase() : ""));
    return `${t.substr(0, 1).toLowerCase()}${t.substr(1)}`;
  };
  const getData = (e, t) => {
    try {
      return JSON.parse(e.dataset[camelize(t)]);
    } catch (o) {
      return e.dataset[camelize(t)];
    }
  };

  const renderCalendar = (e, t) => {
    const { merge: r } = window._,
      a = r(
        {
          initialView: "dayGridMonth",
          weekNumberCalculation: "ISO",
          editable: !0,
          direction: document.querySelector("html").getAttribute("dir"),
          headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay",
          },
          buttonText: { month: "Month", week: "Week", day: "Day" },
        },
        t
      ),
      n = new window.FullCalendar.Calendar(e, a);
    return (
      n.render(),
      document
        .querySelector(".navbar-vertical-toggle")
        ?.addEventListener("navbar.vertical.toggle", () => n.updateSize()),
      n
    );
  };
  const fullCalendarInit = () => {
    const { getData: e } = window.phoenix.utils;
    document.querySelectorAll("[data-calendar]").forEach((t) => {
      const r = e(t, "calendar");
      renderCalendar(t, r);
    });
  };
  const fullCalendar = {
    renderCalendar: renderCalendar,
    fullCalendarInit: fullCalendarInit,
  };

  const { dayjs: dayjs } = window,
    currentDay = dayjs && dayjs().format("DD"),
    currentMonth = dayjs && dayjs().format("MM"),
    prevMonth = dayjs && dayjs().subtract(1, "month").format("MM"),
    nextMonth = dayjs && dayjs().add(1, "month").format("MM"),
    currentYear = dayjs && dayjs().format("YYYY"),
    events = [
      {
        title: "Boot Camp Neav",
        start: `${currentYear}-${currentMonth}-01 10:00:00`,
        end: `${currentYear}-${currentMonth}-03 16:00:00`,
        description:
          "Boston Harbor Now in partnership with the Friends of Christopher Columbus Park, the Wharf District Council and the City of Boston is proud to announce the New Year's Eve Midnight Harbor Fireworks! This beloved nearly 40-year old tradition is made possible by the generous support of local waterfront organizations and businesses and the support of the City of Boston and the Office of Mayor Marty Walsh.",
        className: "text-success",
        location:
          "Boston Harborwalk, Christopher Columbus Park, <br /> Boston, MA 02109, United States",
        organizer: "Boston Harbor Now",
      },
      {
        title: "Crain's New York Business ",
        start: `${currentYear}-${currentMonth}-11`,
        description:
          "Crain's 2020 Hall of Fame. Sponsored Content By Crain's Content Studio. Crain's Content Studio Presents: New Jersey: Perfect for Business. Crain's Business Forum: Letitia James, New York State Attorney General. Crain's NYC Summit: Examining racial disparities during the pandemic",
        className: "text-primary",
      },
      {
        title: "Conference",
        start: `${currentYear}-${currentMonth}-${currentDay}`,
        description:
          "The Milken Institute Global Conference gathered the best minds in the world to tackle some of its most stubborn challenges. It was a unique experience in which individuals with the power to enact change connected with experts who are reinventing health, technology, philanthropy, industry, and media.",
        className: "text-success",
        schedules: [
          {
            title: "Reporting",
            start: `${currentYear}-${currentMonth}-${currentDay} 11:00:00`,
            description:
              "Time to start the conference and will briefly describe all information about the event.  ",
            className: "text-success ",
          },
          {
            title: "Lunch",
            start: `${currentYear}-${currentMonth}-${currentDay} 14:00:00`,
            description:
              "Lunch facility for all the attendance in the conference.",
            className: "text-info",
          },
          {
            title: "Contest",
            start: `${currentYear}-${currentMonth}-${currentDay} 16:00:00`,
            description: "The starting of the programming contest",
            className: "text-success",
          },
          {
            title: "Dinner",
            start: `${currentYear}-${currentMonth}-${currentDay} 22:00:00`,
            description:
              "Dinner facility for all the attendance in the conference",
            className: "text-success",
          },
        ],
      },
      {
        title: `ICT Expo ${currentYear} - Product Release`,
        start: `${currentYear}-${currentMonth}-16 10:00:00`,
        description: `ICT Expo ${currentYear} is the largest private-sector exposition aimed at showcasing IT and ITES products and services in Switzerland.`,
        end: `${currentYear}-${currentMonth}-18 16:00:00`,
        className: "text-warning",
        allDay: !0,
      },
      {
        title: "Meeting",
        start: `${currentYear}-${currentMonth}-07 10:00:00`,
        description:
          " about the upcoming projects in current year and assign all tasks to the individuals",
        className: "text-info",
      },
      {
        title: "Contest",
        start: `${currentYear}-${currentMonth}-14 10:00:00`,
        className: "text-info",
        description:
          "PeaceX is an international peace and amity organisation that aims at casting a pall at the striking issues surmounting the development of peoples and is committed to impacting the lives of young people all over the world.",
      },
      {
        title: "Event With Url",
        start: `${currentYear}-${currentMonth}-23`,
        description:
          "Sample example of a event with url. Click the event, will redirect to the given link.",
        className: "text-success",
        url: "http://google.com",
      },
      {
        title: "Competition",
        start: `${currentYear}-${currentMonth}-26`,
        description:
          "The Future of Zambia – Top 30 Under 30 is an annual award, ranking scheme, and recognition platform for young Zambian achievers under the age of 30, who are building brands, creating jobs, changing the game, and transforming the country.",
        className: "text-danger",
      },
      {
        title: "Birthday Party",
        start: `${currentYear}-${nextMonth}-05`,
        description: "Will celebrate birthday party with my friends and family",
        className: "text-primary",
      },
      {
        title: "Click for Google",
        url: "http://google.com/",
        start: `${currentYear}-${prevMonth}-10`,
        description:
          "Applications are open for the New Media Writing Prize 2020. The New Media Writing Prize (NMWP) showcases exciting and inventive stories and poetry that integrate a variety of formats, platforms, and digital media.",
        className: "text-primary",
      },
    ];

  const getTemplate = (n) =>
    `\n<div class="modal-header ps-card border-bottom border-translucent justify-content-between">\n  <div>\n    <h4 class="modal-title text-body-highlight mb-0">${
      n.title
    }</h4>\n    ${
      n.extendedProps.organizer
        ? `<p class="mb-0 fs-9 mt-1">\n        by <a href="#!">${n.extendedProps.organizer}</a>\n      </p>`
        : ""
    }\n  </div>\n  <button type="button" class="btn p-1 fw-bolder" data-bs-dismiss="modal" aria-label="Close">\n    <span class='fas fa-times fs-8'></span>\n  </button>\n\n</div>\n\n<div class="modal-body px-card pb-card pt-1 fs-9">\n  ${
      n.extendedProps.description
        ? `\n      <div class="mt-3 border-bottom pb-3 border-translucent">\n        <h5 class='mb-0 text-body-secondary'>Description</h5>\n        <p class="mb-0 mt-2">\n          ${n.extendedProps.description
            .split(" ")
            .slice(0, 30)
            .join(" ")}\n        </p>\n      </div>\n    `
        : ""
    } \n  <div class="mt-4 ${
      n.extendedProps.location ? "border-bottom pb-3 border-translucent" : ""
    }">\n    <h5 class='mb-0 text-body-secondary'>Date and Time</h5>\n    <p class="mb-1 mt-2">\n    ${
      window.dayjs && window.dayjs(n.start).format("dddd, MMMM D, YYYY, h:mm A")
    } \n    ${
      n.end
        ? `– ${
            window.dayjs &&
            window
              .dayjs(n.end)
              .subtract(1, "day")
              .format("dddd, MMMM D, YYYY, h:mm A")
          }`
        : ""
    }\n  </p>\n\n  </div>\n  ${
      n.extendedProps.location
        ? `\n        <div class="mt-4 ">\n          <h5 class='mb-0 text-body-secondary'>Location</h5>\n          <p class="mb-0 mt-2">${n.extendedProps.location}</p>\n        </div>\n      `
        : ""
    }\n  ${
      n.schedules
        ? `\n      <div class="mt-3">\n        <h5 class='mb-0 text-body-secondary'>Schedule</h5>\n        <ul class="list-unstyled timeline mt-2 mb-0">\n          ${n.schedules
            .map((n) => `<li>${n.title}</li>`)
            .join("")}\n        </ul>\n      </div>\n      `
        : ""
    }\n  </div>\n</div>\n\n<div class="modal-footer d-flex justify-content-end px-card pt-0 border-top-0">\n  <a href="#!" class="btn btn-phoenix-secondary btn-sm">\n    <span class="fas fa-pencil-alt fs-10 mr-2"></span> Edit\n  </a>\n  <button class="btn btn-phoenix-danger btn-sm" data-calendar-event-remove >\n    <span class="fa-solid fa-trash fs-9 mr-2" data-fa-transform="shrink-2"></span> Delete\n  </button>\n  <a href='#!' class="btn btn-primary btn-sm">\n    See more details\n    <span class="fas fa-angle-right fs-10 ml-1"></span>\n  </a>\n</div>\n`;

  const appCalendarInit = () => {
    const e = "#addEventForm",
      t = "#addEventModal",
      a = "#appCalendar",
      n = ".calendar-title",
      r = ".calendar-day",
      o = ".calendar-date",
      l = "[data-fc-view]",
      c = "data-event",
      d = "#eventDetailsModal",
      i = "#eventDetailsModal .modal-content",
      s = '#addEventModal [name="startDate"]',
      u = '[name="title"]',
      m = "shown.bs.modal",
      v = "submit",
      g = "event",
      y = "fc-view",
      p = events.reduce(
        (e, t) => (t.schedules ? e.concat(t.schedules.concat(t)) : e.concat(t)),
        []
      );
    (() => {
      const e = new Date(),
        t = e.toLocaleString("en-US", { month: "short" }),
        a = e.getDate(),
        n = e.getDay(),
        l = `${a}  ${t},  ${e.getFullYear()}`;
      document.querySelector(r) &&
        (document.querySelector(r).textContent = ((e) =>
          [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
          ][e])(n)),
        document.querySelector(o) &&
          (document.querySelector(o).textContent = l);
    })();
    const h = (e) => {
        const { currentViewType: t } = e;
        if ("timeGridWeek" === t) {
          const t = e.dateProfile.currentRange.start,
            a = t.toLocaleString("en-US", { month: "short" }),
            r = t.getDate(),
            o = e.dateProfile.currentRange.end,
            l = o.toLocaleString("en-US", { month: "short" });
          console.log(o);
          const c = o.getDate();
          document.querySelector(n).textContent = `${a} ${r} - ${l} ${c}`;
        } else document.querySelector(n).textContent = e.viewTitle;
      },
      w = document.querySelector(a),
      f = document.querySelector(e),
      D = document.querySelector(t),
      S = document.querySelector(d);
    if (w) {
      const e = fullCalendar.renderCalendar(w, {
        headerToolbar: !1,
        dayMaxEvents: 3,
        height: 800,
        stickyHeaderDates: !1,
        views: { week: { eventLimit: 3 } },
        eventTimeFormat: {
          hour: "numeric",
          minute: "2-digit",
          omitZeroMinute: !0,
          meridiem: !0,
        },
        events: p,
        eventClick: (e) => {
          if (e.event.url)
            window.open(e.event.url, "_blank"), e.jsEvent.preventDefault();
          else {
            const t = getTemplate(e.event);
            document.querySelector(i).innerHTML = t;
            new window.bootstrap.Modal(S).show();
          }
        },
        dateClick(e) {
          new window.bootstrap.Modal(D).show();
          document.querySelector(s)._flatpickr.setDate([e.dateStr]);
        },
      });
      h(e.currentData),
        document.addEventListener("click", (t) => {
          if (t.target.hasAttribute(c) || t.target.parentNode.hasAttribute(c)) {
            const a = t.target.hasAttribute(c) ? t.target : t.target.parentNode;
            switch (getData(a, g)) {
              case "prev":
                e.prev(), h(e.currentData);
                break;
              case "next":
                e.next(), h(e.currentData);
                break;
              default:
                e.today(), h(e.currentData);
            }
          }
          if (t.target.hasAttribute("data-fc-view")) {
            const a = t.target;
            e.changeView(getData(a, y)),
              h(e.currentData),
              document.querySelectorAll(l).forEach((e) => {
                e === t.target
                  ? e.classList.add("active-view")
                  : e.classList.remove("active-view");
              });
          }
        }),
        f &&
          f.addEventListener(v, (t) => {
            t.preventDefault();
            const {
              title: a,
              startDate: n,
              endDate: r,
              label: o,
              description: l,
              allDay: c,
            } = t.target;
            e.addEvent({
              title: a.value,
              start: n.value,
              end: r.value ? r.value : null,
              allDay: c.checked,
              className: `text-${o.value}`,
              description: l.value,
            }),
              t.target.reset(),
              window.bootstrap.Modal.getInstance(D).hide();
          }),
        D &&
          D.addEventListener(m, ({ currentTarget: e }) => {
            e.querySelector(u)?.focus();
          });
    }
  };

  const { docReady: docReady } = window.phoenix.utils;
  docReady(appCalendarInit);
});
//# sourceMappingURL=calendar.js.map
