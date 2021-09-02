// service-worker.js
self.addEventListener('install', event => console.log('ServiceWorker installed'));

self.addEventListener('notificationclick', event => {
    event.waitUntil(self.clients.openWindow('/'));
});

self.addEventListener('notificationclick', event => {
    event.waitUntil(self.clients.matchAll().then(clients => {
        if (clients.length) { // check if at least one tab is already open
            clients[0].focus();
        } else {
            self.clients.openWindow('/');
        }
    }));
});

self.addEventListener('notificationclick', event => {
    if (event.action === 'close') {
        event.notification.close();
    } else {
        self.clients.openWindow('/');
    }
});

self.addEventListener('notificationclick', event => {
    event.waitUntil(self.clients.matchAll().then(clients => {
        if (clients.length) { // check if at least one tab is already open
            clients[0].focus();
            clients[0].postMessage('Push notification clicked!');
        } else {
            self.clients.openWindow('/');
        }
    }));
});

navigator.serviceWorker.addEventListener('message', event => console.log(event.data));