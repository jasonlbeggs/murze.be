<div>
    Payments can be made with credit cards and are handled securely with Stripe. Which amount in EUR would you
    like to pay?
</div>

<form action="/payments/set-amount" method="POST" class="pt-2">
    @csrf
    <div class="flex flex-1">
        <input class="rounded-l border p-3" name="amount" type="number" placeholder="Amount in EUR">
        <input class="rounded-r bg-blue text-white py-2 px-2 text-base font-bold clickable border-none"
               value="Proceed to Stripe" type="submit">
    </div>

    @if($errors->has('amount'))
        <div class="validation-error">
            A valid amount is between 1 and 9999.
        </div>
    @endif
</form>