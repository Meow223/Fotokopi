<style>
    .card {
        width: 300px;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        transition: box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card-content {
        margin-top: 20px;
    }

    .card-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-description {
        font-size: 16px;
        color: #888;
        margin-bottom: 10px;
    }

    .card-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 4px;
    }
</style>

<div class="card">
    <img class="card-image" src="{{ $profileImage }}" alt="Profile Image">
    <div class="card-content">
        <h5 class="card-title">{{ $name }}</h5>
        <p class="card-description">{{ $occupation }}</p>
        <p class="card-description">Location: {{ $location }}</p>
    </div>
</div>