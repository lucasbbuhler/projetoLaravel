<x-app-layout>
<div style="min-height: 92.9vh; display: flex; align-items: center; justify-content: center; position: relative; background-image: url('https://magicgramas.com.br/blog/wp-content/uploads/2018/07/1.jpg'); background-size: cover; background-position: center;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3);"></div>
    <div style="position: relative; text-align: center; color: black; padding: 60px; background-color: rgba(255, 255, 240, 0.85); margin-top: -10rem;">
            <h1 style="font-weight: bold; font-size: 4rem; margin-bottom: 20px;">Administrador de Reservas</h1>
            <div style="display: inline-flex; gap: 10px;">
                <a href="{{ route('reservas.index') }}" style="background-color: black; color: white; font-weight: bold; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Reservas</a>
                <a href="{{ route('pagamentos.index') }}" style="background-color: black; color: white; font-weight: bold; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Pagamentos</a>
            </div>
        </div>
    </div>
</x-app-layout>