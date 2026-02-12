<?php include 'header.php'; ?>

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="text-center mb-4">Descubra seu Signo 🔮</h2>

        <form method="POST" action="show_zodiac_sign.php">
            <div class="mb-3">
                <label for="birthdate" class="form-label">Data de Nascimento:</label>
                <input type="date" name="birthdate" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Ver Meu Signo
            </button>
        </form>
    </div>
</div>

</body>
</html>
