const BASE_URL = "http://localhost/voisinconnect_api/api";

// ════════════════════════════════════════════
//  MEMBRES
// ════════════════════════════════════════════

async function getMembres() {
    const res = await fetch(`${BASE_URL}/membres.php`);
    return res.json();
}

async function getMembre(id) {
    const res = await fetch(`${BASE_URL}/membres.php?id=${id}`);
    return res.json();
}

async function addMembre(data) {
    const res = await fetch(`${BASE_URL}/membres.php`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });
    return res.json();
}

async function updateMembre(data) {
    const res = await fetch(`${BASE_URL}/membres.php`, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });
    return res.json();
}

async function deleteMembre(id) {
    const res = await fetch(`${BASE_URL}/membres.php`, {
        method: "DELETE",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ id })
    });
    return res.json();
}

// ════════════════════════════════════════════
//  SERVICES
// ════════════════════════════════════════════

async function getServices() {
    const res = await fetch(`${BASE_URL}/services.php`);
    return res.json();
}

async function getService(id) {
    const res = await fetch(`${BASE_URL}/services.php?id=${id}`);
    return res.json();
}

async function addService(data) {
    const res = await fetch(`${BASE_URL}/services.php`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });
    return res.json();
}

async function updateService(data) {
    const res = await fetch(`${BASE_URL}/services.php`, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });
    return res.json();
}

async function deleteService(id) {
    const res = await fetch(`${BASE_URL}/services.php`, {
        method: "DELETE",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ id })
    });
    return res.json();
}

// ════════════════════════════════════════════
//  CATEGORIES
// ════════════════════════════════════════════

async function getCategories() {
    const res = await fetch(`${BASE_URL}/categories.php`);
    return res.json();
}

async function getCategorie(id) {
    const res = await fetch(`${BASE_URL}/categories.php?id=${id}`);
    return res.json();
}

async function addCategorie(data) {
    const res = await fetch(`${BASE_URL}/categories.php`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });
    return res.json();
}

async function updateCategorie(data) {
    const res = await fetch(`${BASE_URL}/categories.php`, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });
    return res.json();
}

async function deleteCategorie(id) {
    const res = await fetch(`${BASE_URL}/categories.php`, {
        method: "DELETE",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ id })
    });
    return res.json();
}

// ════════════════════════════════════════════
//  FORFAITS
// ════════════════════════════════════════════

async function getForfaits() {
    const res = await fetch(`${BASE_URL}/forfaits.php`);
    return res.json();
}

async function getForfait(id) {
    const res = await fetch(`${BASE_URL}/forfaits.php?id=${id}`);
    return res.json();
}

async function addForfait(data) {
    const res = await fetch(`${BASE_URL}/forfaits.php`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });
    return res.json();
}

async function updateForfait(data) {
    const res = await fetch(`${BASE_URL}/forfaits.php`, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });
    return res.json();
}

async function deleteForfait(id) {
    const res = await fetch(`${BASE_URL}/forfaits.php`, {
        method: "DELETE",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ id })
    });
    return res.json();
}

// ════════════════════════════════════════════
//  ADHESIONS
// ════════════════════════════════════════════

async function getAdhesions() {
    const res = await fetch(`${BASE_URL}/adhesions.php`);
    return res.json();
}

async function getAdhesion(id) {
    const res = await fetch(`${BASE_URL}/adhesions.php?id=${id}`);
    return res.json();
}

async function addAdhesion(data) {
    const res = await fetch(`${BASE_URL}/adhesions.php`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });
    return res.json();
}

async function updateAdhesion(data) {
    const res = await fetch(`${BASE_URL}/adhesions.php`, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });
    return res.json();
}

async function deleteAdhesion(id) {
    const res = await fetch(`${BASE_URL}/adhesions.php`, {
        method: "DELETE",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ id })
    });
    return res.json();
}

// ════════════════════════════════════════════
//  REPONSES
// ════════════════════════════════════════════

async function getReponses() {
    const res = await fetch(`${BASE_URL}/reponses.php`);
    return res.json();
}

async function getReponse(id) {
    const res = await fetch(`${BASE_URL}/reponses.php?id=${id}`);
    return res.json();
}

async function addReponse(data) {
    const res = await fetch(`${BASE_URL}/reponses.php`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });
    return res.json();
}

async function updateReponse(data) {
    const res = await fetch(`${BASE_URL}/reponses.php`, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });
    return res.json();
}

async function deleteReponse(id) {
    const res = await fetch(`${BASE_URL}/reponses.php`, {
        method: "DELETE",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ id })
    });
    return res.json();
}