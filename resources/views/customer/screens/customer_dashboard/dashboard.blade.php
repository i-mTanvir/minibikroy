@extends('layouts.app')

@section('content')
    <section class="space-y-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <p class="text-sm font-medium uppercase tracking-wide text-blue-700">Customer Area</p>
            <div class="mt-2 flex flex-col gap-2 md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900">Welcome back, {{ $customerName }}</h1>
                    <p class="text-sm text-slate-600">Here is your account overview and latest activity.</p>
                </div>
                <a href="#" class="inline-flex rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">
                    Continue Checkout
                </a>
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($stats as $stat)
                <article class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                    <p class="text-sm text-slate-500">{{ $stat['label'] }}</p>
                    <p class="mt-2 text-3xl font-bold text-slate-900">{{ $stat['value'] }}</p>
                </article>
            @endforeach
        </div>

        <div class="grid gap-6 lg:grid-cols-3">
            <div class="lg:col-span-2">
                <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">
                    <div class="border-b border-slate-200 px-6 py-4">
                        <h2 class="text-lg font-semibold text-slate-900">Recent Orders</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead class="bg-slate-50 text-slate-600">
                                <tr>
                                    <th class="px-6 py-3 font-semibold">Order</th>
                                    <th class="px-6 py-3 font-semibold">Item</th>
                                    <th class="px-6 py-3 font-semibold">Date</th>
                                    <th class="px-6 py-3 font-semibold">Amount</th>
                                    <th class="px-6 py-3 font-semibold">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                @foreach ($recentOrders as $order)
                                    <tr>
                                        <td class="px-6 py-4 font-medium text-slate-900">{{ $order['order_no'] }}</td>
                                        <td class="px-6 py-4 text-slate-700">{{ $order['item'] }}</td>
                                        <td class="px-6 py-4 text-slate-700">{{ $order['date'] }}</td>
                                        <td class="px-6 py-4 text-slate-700">{{ $order['amount'] }}</td>
                                        <td class="px-6 py-4">
                                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-800">
                                                {{ $order['status'] }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <aside class="space-y-6">
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <h2 class="text-lg font-semibold text-slate-900">Quick Actions</h2>
                    <ul class="mt-4 space-y-2">
                        @foreach ($quickActions as $action)
                            <li>
                                <a href="{{ $action['href'] }}" class="block rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">
                                    {{ $action['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-gradient-to-br from-blue-50 to-indigo-100 p-5 shadow-sm">
                    <h3 class="text-base font-semibold text-slate-900">Need help with an order?</h3>
                    <p class="mt-2 text-sm text-slate-700">
                        Reach support for payment, delivery, and listing verification issues.
                    </p>
                    <a href="#" class="mt-4 inline-flex rounded-lg bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800">
                        Contact Support
                    </a>
                </div>
            </aside>
        </div>
    </section>
@endsection
