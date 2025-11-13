@extends('emails.layouts.default')

@section('content')
    <p>Olá {{ $user->first_name }}, </p>
    <p>Seja bem vindo ao {{ config('app.name') }} </p>
    <p>Por favor, clique no botão abaixo para verificar a sua conta.</p>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
    <tbody>
        <tr>
        <td align="left">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                <td> <a href="{{ config('app.portal_url') }}/verificar-email?token={{ $user->token }}" target="_blank">Confirmar Conta</a> </td>
                </tr>
            </tbody>
            </table>
        </td>
        </tr>
    </tbody>
    </table>
    <p>This is a really simple email template. It's sole purpose is to get the recipient to click the button with no distractions.</p>
    <p>Good luck! Hope it works.</p>
@endsection
