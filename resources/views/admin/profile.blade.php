@extends('adminlte::page')



@section('content')
    @if (session()->has('success'))
        <p class="alert alert-success">{{session()->get('success')}}</p>
    @endif

    @if (session()->has('warning'))
        <p class="alert alert-warning">{{session()->get('warning')}}</p>
    @endif
        @if (session()->has('danger'))
            <p class="alert alert-danger">{{session()->get('dander')}}</p>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <html class="theme-init dark">
    <link href="./trade/app.90d66741cc430653d73d88db1d19b6f9.css" rel="stylesheet">
    <div>
        <div>
            {{--<div id="app"><!---->--}}




                    <div   class="content"><!----> <!---->


                        <div   class="container">
                            <div data-v-7d171b2a=""   class="main profile">
                                <div data-v-7d171b2a="" class="link-panes">
                                    <div data-v-7d171b2a="" class="link-pane selected">Общие настройки</div>
                                    <div data-v-7d171b2a="" class="link-pane">Реферальная программа</div>
                                </div> <!---->
                                <div data-v-7d171b2a="">
                                    <div data-v-7d171b2a="" hidden="hidden"></div>
                                    <div data-v-7d171b2a="" class="row">
                                        <div data-v-7d171b2a="" class="col-md-12 col-xl-6 mobile">
                                            <div data-v-7d171b2a="" class="block">
                                                <div data-v-7d171b2a="">
                                                    <div data-v-7d171b2a="" class="entity-nav entity-nav-bottom-line"><span
                                                                data-v-7d171b2a="" class="entity-nav-title">Рабочие биржевые аккаунты</span>
                                                    </div>
                                                    <div data-v-7d171b2a=""
                                                         class="block-inner block-inner-vertical-paddings">
                                                        <div data-v-7d171b2a="" id="user-exchanges-list-container-mobile"
                                                             class="user-exchanges">
                                                            <div data-v-7d171b2a="" class="each-user-exchange">
                                                                <div data-v-7d171b2a="" class="part"><span
                                                                            data-v-7d171b2a="" class="exchange-image"><img
                                                                                data-v-7d171b2a=""
                                                                                src="./trade/Binance.png"></span>
                                                                    <span data-v-7d171b2a="" class="name">Binance</span>
                                                                </div>
                                                                <div data-v-7d171b2a="" class="part">
                                                                    binance
                                                                </div>
                                                                <span data-v-7d171b2a=""
                                                                      class="ifont icon-times remove-icon"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-v-7d171b2a="" class="entity-nav entity-nav-bottom-line"><span
                                                            data-v-7d171b2a="" class="entity-nav-title">Добавить биржевой аккаунт</span>
                                                </div>
                                                <form data-v-7d171b2a="">
                                                    <div data-v-7d171b2a="" id="user-exchanges-form-container-mobile"
                                                         class="block-inner">
                                                        <div data-v-7d171b2a="" class="row">
                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-6">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Биржа</label>
                                                                    <div data-v-7d171b2a="" class="use-mini-multiselect">
                                                                        <div data-v-7d171b2a="" tabindex="0"
                                                                             class="multiselect tasks-custom-multiselect multiselect-36 add-new-user-exchange">
                                                                        <span data-v-7d171b2a=""
                                                                              class="multiselect__caret"><span
                                                                                    data-v-7d171b2a=""
                                                                                    class="ifont icon-shevron-right"></span></span>
                                                                            <div class="multiselect__tags">
                                                                                <div class="multiselect__tags-wrap"
                                                                                     style="display: none;"></div> <!---->
                                                                                <div class="multiselect__spinner"
                                                                                     style="display: none;"></div>
                                                                                <input name="" type="text"
                                                                                       autocomplete="off"
                                                                                       placeholder="Select option"
                                                                                       tabindex="0"
                                                                                       class="multiselect__input"
                                                                                       style="display: none;"> <span
                                                                                        class="multiselect__single"><span
                                                                                            data-v-7d171b2a=""><span
                                                                                                data-v-7d171b2a=""
                                                                                                class="exchange-image"><img
                                                                                                    data-v-7d171b2a=""
                                                                                                    src="./trade/Binance.png"></span> <span
                                                                                                data-v-7d171b2a=""
                                                                                                class="exchange-name">Binance</span></span></span>
                                                                                <!----></div>
                                                                            <div class="multiselect__content-wrapper"
                                                                                 style="max-height: 300px; display: none;">
                                                                                <ul class="multiselect__content"
                                                                                    style="display: inline-block;"> <!---->
                                                                                    <li class="multiselect__element"><span
                                                                                                data-select=""
                                                                                                data-selected=""
                                                                                                data-deselect=""
                                                                                                class="multiselect__option multiselect__option--highlight"><span
                                                                                                    data-v-7d171b2a=""
                                                                                                    class="exchange-image"><img
                                                                                                        data-v-7d171b2a=""
                                                                                                        src="./trade/Poloniex.png"></span>
			                                            Poloniex
			                                        </span> <!----></li>
                                                                                    <li class="multiselect__element"><span
                                                                                                data-select=""
                                                                                                data-selected=""
                                                                                                data-deselect=""
                                                                                                class="multiselect__option multiselect__option--selected"><span
                                                                                                    data-v-7d171b2a=""
                                                                                                    class="exchange-image"><img
                                                                                                        data-v-7d171b2a=""
                                                                                                        src="./trade/Binance.png"></span>
			                                            Binance
			                                        </span> <!----></li>
                                                                                    <li class="multiselect__element"><span
                                                                                                data-select=""
                                                                                                data-selected=""
                                                                                                data-deselect=""
                                                                                                class="multiselect__option"><span
                                                                                                    data-v-7d171b2a=""
                                                                                                    class="exchange-image"><img
                                                                                                        data-v-7d171b2a=""
                                                                                                        src="./trade/BitMEX.png"></span>
			                                            BitMEX
			                                        </span> <!----></li>
                                                                                    <li class="multiselect__element"><span
                                                                                                data-select=""
                                                                                                data-selected=""
                                                                                                data-deselect=""
                                                                                                class="multiselect__option"><span
                                                                                                    data-v-7d171b2a=""
                                                                                                    class="exchange-image"><img
                                                                                                        data-v-7d171b2a=""
                                                                                                        src="./trade/BitMEX TestNet.png"></span>
			                                            BitMEX TestNet
			                                        </span> <!----></li>
                                                                                    <li style="display: none;"><span
                                                                                                class="multiselect__option">No elements found. Consider changing the search query.</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-6">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Название</label> <input
                                                                            data-v-7d171b2a="" type="text"
                                                                            class="form-control custom-input"></div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-6">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Key</label> <input
                                                                            data-v-7d171b2a="" type="text"
                                                                            class="form-control custom-input"></div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-6">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Secret</label> <input
                                                                            data-v-7d171b2a="" type="text"
                                                                            class="form-control custom-input"></div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="col-12">
                                                                <div data-v-7d171b2a="" class="how-to-add-exchange-tip">
                                                                    Дорогой пользователь, <b>получай 20% скидку</b> <br>на
                                                                    оплату комиссий на Binance по <a class="ref-link-a"
                                                                                                     href="https://www.binance.com/ru/register?ref=J6YRQ5I7"
                                                                                                     target="_blank">данной
                                                                        ссылке</a>.
                                                                </div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="col-12"><span data-v-7d171b2a=""
                                                                                                         class="how-to-add-exchange-tip">
											Для создания Key и Secret на Binance вам нужно авторизоваться на бирже и пройти по ссылке:
											<a data-v-7d171b2a=""
                                               href="https://www.binance.com/userCenter/createApi.html" target="_blank">https://www.binance.com/userCenter/createApi.html</a>
                                                                    <!----> <!----> <!----></span></div>
                                                        </div>
                                                        <div data-v-7d171b2a="" class="row">
                                                            <div data-v-7d171b2a="" class="col-12"><!----></div>
                                                        </div>
                                                    </div>
                                                    <div data-v-7d171b2a="" class="block-inner block-inner-buttons">
                                                        <div data-v-7d171b2a="" class="form-buttons"><span
                                                                    data-v-7d171b2a="" id="add-user-exchange-button-mobile"><!----> <button
                                                                        data-v-7d171b2a="" disabled="disabled" type="submit"
                                                                        class="btn btn-sm btn-tm btn-tm-big">Добавить аккаунт</button></span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div data-v-7d171b2a="" class="col-md-12 col-xl-6">
                                            <div data-v-7d171b2a="" class="block">
                                                <form data-v-7d171b2a="" action="{{route('profile.update', $item->id)}}" method="post">
                                                    @method('PUT')
                                                    @csrf
                                                    <div data-v-7d171b2a="" class="entity-nav entity-nav-bottom-line"><span
                                                                data-v-7d171b2a="" class="entity-nav-title">Настройки пользователя</span>
                                                    </div>
                                                    <div data-v-7d171b2a="" class="block-inner">
                                                        <div data-v-7d171b2a="" class="row">
                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-6">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Имя пользователя</label>
                                                                    <input data-v-7d171b2a="" type="text" id="name" name="name" value="{{$item->name}}"
                                                                           class="form-control custom-input"></div>
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Электронная почта</label>
                                                                    <input data-v-7d171b2a=""type="text" id="email" name="email"   value="{{$item->email}}"

                                                                    class="form-control custom-input">
                                                                </div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-6">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Уведомления</label>
                                                                    <div data-v-7d171b2a="" class="checkboxes">
                                                                        <div data-v-7d171b2a="" class="form-check"><input
                                                                                    data-v-7d171b2a="" type="checkbox"
                                                                                    value="" id="payment_plan_changed"
                                                                                    class="form-check-input"> <label
                                                                                    data-v-7d171b2a=""
                                                                                    for="payment_plan_changed"
                                                                                    class="form-check-label">
                                                                                Тарифный план был изменен
                                                                            </label></div>
                                                                        <div data-v-7d171b2a="" class="form-check"><input
                                                                                    data-v-7d171b2a="" type="checkbox"
                                                                                    value="" id="ticket_created"
                                                                                    class="form-check-input"> <label
                                                                                    data-v-7d171b2a="" for="ticket_created"
                                                                                    class="form-check-label">
                                                                                Тикет создан
                                                                            </label></div>
                                                                        <div data-v-7d171b2a="" class="form-check"><input
                                                                                    data-v-7d171b2a="" type="checkbox"
                                                                                    value="" id="ticket_replied"
                                                                                    class="form-check-input"> <label
                                                                                    data-v-7d171b2a="" for="ticket_replied"
                                                                                    class="form-check-label">
                                                                                На тикет получен ответ
                                                                            </label></div>
                                                                        <div data-v-7d171b2a="" class="form-check"><input
                                                                                    data-v-7d171b2a="" type="checkbox"
                                                                                    value="" id="ticket_closed"
                                                                                    class="form-check-input"> <label
                                                                                    data-v-7d171b2a="" for="ticket_closed"
                                                                                    class="form-check-label">
                                                                                Тикет был закрыт
                                                                            </label></div>
                                                                        <div data-v-7d171b2a="" class="form-check"><input
                                                                                    data-v-7d171b2a="" type="checkbox"
                                                                                    value="" id="payment_plan_expire_soon"
                                                                                    class="form-check-input"> <label
                                                                                    data-v-7d171b2a=""
                                                                                    for="payment_plan_expire_soon"
                                                                                    class="form-check-label">
                                                                                Срок действия тарифного плана подходит к
                                                                                концу
                                                                            </label></div>
                                                                        <div data-v-7d171b2a="" class="form-check"><input
                                                                                    data-v-7d171b2a="" type="checkbox"
                                                                                    value="" id="payment_plan_expired"
                                                                                    class="form-check-input"> <label
                                                                                    data-v-7d171b2a=""
                                                                                    for="payment_plan_expired"
                                                                                    class="form-check-label">
                                                                                Срок действия тарифного плана истек
                                                                            </label></div>
                                                                        <div data-v-7d171b2a="" class="form-check"><input
                                                                                    data-v-7d171b2a="" type="checkbox"
                                                                                    value="" id="task_ended"
                                                                                    class="form-check-input"> <label
                                                                                    data-v-7d171b2a="" for="task_ended"
                                                                                    class="form-check-label">
                                                                                Задача завершена
                                                                            </label></div>
                                                                        <div data-v-7d171b2a="" class="form-check"><input
                                                                                    data-v-7d171b2a="" type="checkbox"
                                                                                    value="" id="task_nothing_to_sell"
                                                                                    class="form-check-input"> <label
                                                                                    data-v-7d171b2a=""
                                                                                    for="task_nothing_to_sell"
                                                                                    class="form-check-label">
                                                                                В задаче нечего продавать
                                                                            </label></div>
                                                                        <div data-v-7d171b2a="" class="form-check"><input
                                                                                    data-v-7d171b2a="" type="checkbox"
                                                                                    value="" id="auto_task_created"
                                                                                    class="form-check-input"> <label
                                                                                    data-v-7d171b2a=""
                                                                                    for="auto_task_created"
                                                                                    class="form-check-label">
                                                                                Авто трейд создал задачу
                                                                            </label></div>
                                                                        <div data-v-7d171b2a="" class="form-check"><input
                                                                                    data-v-7d171b2a="" type="checkbox"
                                                                                    value="" id="newsletter"
                                                                                    class="form-check-input"> <label
                                                                                    data-v-7d171b2a="" for="newsletter"
                                                                                    class="form-check-label">
                                                                                Новостная рассылка
                                                                            </label></div>
                                                                        <div data-v-7d171b2a="" class="form-check"><input
                                                                                    data-v-7d171b2a="" type="checkbox"
                                                                                    value="" id="trusted_account"
                                                                                    class="form-check-input"> <label
                                                                                    data-v-7d171b2a="" for="trusted_account"
                                                                                    class="form-check-label">
                                                                                Информация по доверительным аккаунтам
                                                                            </label></div>
                                                                        <div data-v-7d171b2a="" class="form-check"><input
                                                                                    data-v-7d171b2a="" type="checkbox"
                                                                                    value="" id="personal_feed_changes"
                                                                                    class="form-check-input"> <label
                                                                                    data-v-7d171b2a=""
                                                                                    for="personal_feed_changes"
                                                                                    class="form-check-label">
                                                                                Информация по изменениям каналов
                                                                            </label></div>
                                                                        <div data-v-7d171b2a="" class="form-check"><input
                                                                                    data-v-7d171b2a="" type="checkbox"
                                                                                    value="" id="user_login"
                                                                                    class="form-check-input"> <label
                                                                                    data-v-7d171b2a="" for="user_login"
                                                                                    class="form-check-label">
                                                                                Пользовательский вход
                                                                            </label></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-v-7d171b2a="" class="row">
                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-6">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Язык</label>
                                                                    <div data-v-7d171b2a="" class="use-mini-multiselect">
                                                                        <div data-v-7d171b2a="" tabindex="0"
                                                                             class="multiselect tasks-custom-multiselect multiselect-36">
                                                                        <span data-v-7d171b2a=""
                                                                              class="multiselect__caret"><span
                                                                                    data-v-7d171b2a=""
                                                                                    class="ifont icon-shevron-right"></span></span>
                                                                            <div class="multiselect__tags">
                                                                                <div class="multiselect__tags-wrap"
                                                                                     style="display: none;"></div> <!---->
                                                                                <div class="multiselect__spinner"
                                                                                     style="display: none;"></div>
                                                                                <input name="" type="text"
                                                                                       autocomplete="off"
                                                                                       placeholder="Select account"
                                                                                       tabindex="0"
                                                                                       class="multiselect__input"
                                                                                       style="display: none;"> <span
                                                                                        class="multiselect__single"><span
                                                                                            data-v-7d171b2a=""><span
                                                                                                data-v-7d171b2a=""
                                                                                                class="exchange-image"><img
                                                                                                    data-v-7d171b2a=""
                                                                                                    src="./trade/ru.png"></span> <span
                                                                                                data-v-7d171b2a=""
                                                                                                class="exchange-name">Русский</span></span></span>
                                                                                <!----></div>
                                                                            <div class="multiselect__content-wrapper"
                                                                                 style="max-height: 300px; display: none;">
                                                                                <ul class="multiselect__content"
                                                                                    style="display: inline-block;"> <!---->
                                                                                    <li class="multiselect__element"><span
                                                                                                data-select=""
                                                                                                data-selected=""
                                                                                                data-deselect=""
                                                                                                class="multiselect__option multiselect__option--highlight multiselect__option--selected"><span
                                                                                                    data-v-7d171b2a=""
                                                                                                    class="exchange-image"><img
                                                                                                        data-v-7d171b2a=""
                                                                                                        src="./trade/ru.png"></span>
			                                            Русский
			                                        </span> <!----></li>
                                                                                    <li class="multiselect__element"><span
                                                                                                data-select=""
                                                                                                data-selected=""
                                                                                                data-deselect=""
                                                                                                class="multiselect__option"><span
                                                                                                    data-v-7d171b2a=""
                                                                                                    class="exchange-image"><img
                                                                                                        data-v-7d171b2a=""
                                                                                                        src="./trade/en.png"></span>
			                                            English
			                                        </span> <!----></li>
                                                                                    <li style="display: none;"><span
                                                                                                class="multiselect__option">No elements found. Consider changing the search query.</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-7d171b2a="" class="block-inner block-inner-buttons">
                                                        <div data-v-7d171b2a="" class="form-buttons">
                                                            <button data-v-7d171b2a="" type="submit"
                                                                    class="btn btn-sm btn-tm btn-tm-big">Изменить настройки
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div data-v-7d171b2a="" class="block">
                                                <form data-v-7d171b2a="{{route('changepassword')}}" method="post">
                                                    @csrf

                                                    <div data-v-7d171b2a="" class="entity-nav entity-nav-bottom-line"><span
                                                                data-v-7d171b2a=""
                                                                class="entity-nav-title">Сменить пароль</span></div>
                                                    {{--@if($errors->any('msg1'))--}}
                                                        {{--@foreach($errors->all() as $error)--}}
                                                            {{--<p style='padding:15px;' class='bg-danger'>{{ $error }}</p>--}}
                                                        {{--@endforeach--}}
                                                    {{--@endif--}}
                                                    {{--@if(Request::get('errorMessage') !== null)--}}
                                                        {{--<p style='padding:15px;' class='bg-danger'>{{ Request::get('errorMessage') }}</p>--}}
                                                    {{--@endif--}}
                                                    <div data-v-7d171b2a="" class="block-inner"><!---->
                                                        <div data-v-7d171b2a="" class="row">

                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-4">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Старый пароль</label> <input
                                                                            data-v-7d171b2a="" required type="password" id="old_password" name="old_password"
                                                                            class="form-control custom-input"></div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-4">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Новый пароль</label> <input
                                                                            data-v-7d171b2a="" type="password" required id="new_password" name="new_password"
                                                                            class="form-control custom-input"></div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-4">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Повторите пароль</label>
                                                                    <div data-v-7d171b2a="" class="input-container"><!---->
                                                                        <!----> <input data-v-7d171b2a="" required  id="confirm_password" name="confirm_password" type="password"
                                                                                       class="form-control custom-input">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!----> <!---->
                                                        <div data-v-7d171b2a="">
                                                            <div data-v-7d171b2a=""><span data-v-7d171b2a=""
                                                                                          class="reset-link">Забыли пароль?</span>
                                                            </div> <!----></div>
                                                    </div>
                                                    <div data-v-7d171b2a="" class="block-inner block-inner-buttons">
                                                        <div data-v-7d171b2a="" class="form-buttons">
                                                            <button data-v-7d171b2a="" type="submit"
                                                                    class="btn btn-sm btn-tm btn-tm-big">Изменить пароль
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div data-v-7d171b2a="" class="block no-margin">
                                                <div data-v-7d171b2a="" class="entity-nav entity-nav-bottom-line"><span
                                                            data-v-7d171b2a="" class="entity-nav-title">Сессии</span> <span
                                                            data-v-7d171b2a="" class="entity-nav-right-buttons"><button
                                                                data-v-7d171b2a="" type="button"
                                                                class="btn btn-sm btn-tm"><span data-v-7d171b2a=""
                                                                                                class="button-add-ticket-text">Сбросить все сессии</span></button></span>
                                                </div>
                                            </div>
                                            <div data-v-7d171b2a="" class="sort-panel">
                                                <div data-v-7d171b2a="" class="first-slot"></div>
                                                <div data-v-7d171b2a="" class="each-sort">Браузер</div>
                                                <div data-v-7d171b2a="" class="each-sort">Ip</div>
                                                <div data-v-7d171b2a="" class="each-sort">Первый вход</div>
                                                <div data-v-7d171b2a="" class="each-sort">Посл. вход</div>
                                            </div>
                                            <div data-v-7d171b2a="" class="block">
                                                <div data-v-7d171b2a=""
                                                     class="block-inner block-inner-sessions block-inner-no-paddings">
                                                    <div data-v-7d171b2a="" class="sessions-list">
                                                        <div data-v-7d171b2a="" class="each-session">
                                                            <div data-v-7d171b2a="" class="first-slot">
                                                                <div data-v-7d171b2a="" class="dot current"></div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="session-cell f1"><img
                                                                        data-v-7d171b2a=""
                                                                        src="./trade/Windows.svg"
                                                                        class="browser-img"> <img data-v-7d171b2a=""
                                                                                                  src="./trade/chrome.svg"
                                                                                                  class="browser-img"> <span
                                                                        data-v-7d171b2a="">{{$browser}}</span></div>
                                                            <div data-v-7d171b2a="" class="session-cell f1">{{$_SERVER['REMOTE_ADDR']}}
                                                            </div>
                                                            <div data-v-7d171b2a="" class="session-cell f1">16:09
                                                                28.12.2019
                                                            </div>
                                                            <div data-v-7d171b2a="" class="session-cell f1">21:18
                                                                04.01.2020
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-7d171b2a="" class="col-md-12 col-xl-6">
                                            <div data-v-7d171b2a="" class="block">
                                                <div data-v-7d171b2a="" class="entity-nav entity-nav-bottom-line"><span
                                                            data-v-7d171b2a="" class="entity-nav-title">2х факторная авторизация</span>
                                                </div>
                                                <div data-v-7d171b2a="" class="block-inner">
                                                    <div data-v-7d171b2a="" class="form-group"><label data-v-7d171b2a=""
                                                                                                      for="">Тип 2FA</label>
                                                        <div data-v-7d171b2a="" class="use-mini-multiselect">
                                                            <div data-v-7d171b2a="" tabindex="0"
                                                                 class="multiselect tasks-custom-multiselect multiselect-36">
                                                            <span data-v-7d171b2a="" class="multiselect__caret"><span
                                                                        data-v-7d171b2a=""
                                                                        class="ifont icon-shevron-right"></span></span>
                                                                <div class="multiselect__tags">
                                                                    <div class="multiselect__tags-wrap"
                                                                         style="display: none;"></div> <!---->
                                                                    <div class="multiselect__spinner"
                                                                         style="display: none;"></div>
                                                                    <input name="" type="text" autocomplete="off"
                                                                           placeholder="Select option" tabindex="0"
                                                                           class="multiselect__input"
                                                                           style="display: none;"> <span
                                                                            class="multiselect__single">
	                                        Без 2FA
		                                </span> <!----></div>
                                                                <div class="multiselect__content-wrapper"
                                                                     style="max-height: 300px; display: none;">
                                                                    <ul class="multiselect__content"
                                                                        style="display: inline-block;"> <!---->
                                                                        <li class="multiselect__element"><span
                                                                                    data-select="" data-selected=""
                                                                                    data-deselect=""
                                                                                    class="multiselect__option multiselect__option--highlight multiselect__option--selected">
		                                    Без 2FA
		                                </span> <!----></li>
                                                                        <li class="multiselect__element"><span
                                                                                    data-select="" data-selected=""
                                                                                    data-deselect=""
                                                                                    class="multiselect__option">
		                                    Email 2FA
		                                </span> <!----></li>
                                                                        <li style="display: none;"><span
                                                                                    class="multiselect__option">No elements found. Consider changing the search query.</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-v-7d171b2a="" class="block-inner block-inner-buttons">
                                                    <div data-v-7d171b2a="" class="form-buttons">
                                                        <button data-v-7d171b2a="" type="button"
                                                                class="btn btn-sm btn-tm btn-tm-big">Сохранить метод 2FA
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-7d171b2a="" class="block desktop">
                                                <div data-v-7d171b2a="">
                                                    <div data-v-7d171b2a="" class="entity-nav entity-nav-bottom-line"><span
                                                                data-v-7d171b2a="" class="entity-nav-title">Рабочие биржевые аккаунты</span>
                                                    </div>
                                                    <div data-v-7d171b2a=""
                                                         class="block-inner block-inner-vertical-paddings">
                                                        <div data-v-7d171b2a="" id="user-exchanges-list-container"
                                                             class="user-exchanges">
                                                            <div data-v-7d171b2a="" class="each-user-exchange">
                                                                <div data-v-7d171b2a="" class="part"><span
                                                                            data-v-7d171b2a="" class="exchange-image"><img
                                                                                data-v-7d171b2a=""
                                                                                src="./trade/Binance.png"></span>
                                                                    <span data-v-7d171b2a="" class="name">Binance</span>
                                                                </div>
                                                                <div data-v-7d171b2a="" class="part">
                                                                    binance
                                                                </div>
                                                                <span data-v-7d171b2a=""
                                                                      class="ifont icon-times remove-icon"></span></div>
                                                        </div>
                                                    </div>
                                                </div> <!----> <!---->
                                                <div data-v-7d171b2a="" class="entity-nav entity-nav-bottom-line"><span
                                                            data-v-7d171b2a="" class="entity-nav-title">Добавить биржевой аккаунт</span>
                                                </div>
                                                <form data-v-7d171b2a="">
                                                    <div data-v-7d171b2a="" id="user-exchanges-form-container"
                                                         class="block-inner">
                                                        <div data-v-7d171b2a="" class="row">
                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-6">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Биржа</label>
                                                                    <div data-v-7d171b2a="" class="use-mini-multiselect">
                                                                        <div data-v-7d171b2a="" tabindex="0"
                                                                             class="multiselect tasks-custom-multiselect multiselect-36 add-new-user-exchange">
                                                                        <span data-v-7d171b2a=""
                                                                              class="multiselect__caret"><span
                                                                                    data-v-7d171b2a=""
                                                                                    class="ifont icon-shevron-right"></span></span>
                                                                            <div class="multiselect__tags">
                                                                                <div class="multiselect__tags-wrap"
                                                                                     style="display: none;"></div> <!---->
                                                                                <div class="multiselect__spinner"
                                                                                     style="display: none;"></div>
                                                                                <input name="" type="text"
                                                                                       autocomplete="off"
                                                                                       placeholder="Select option"
                                                                                       tabindex="0"
                                                                                       class="multiselect__input"
                                                                                       style="display: none;"> <span
                                                                                        class="multiselect__single"><span
                                                                                            data-v-7d171b2a=""><span
                                                                                                data-v-7d171b2a=""
                                                                                                class="exchange-image"><img
                                                                                                    data-v-7d171b2a=""
                                                                                                    src="./trade/Binance.png"></span> <span
                                                                                                data-v-7d171b2a=""
                                                                                                class="exchange-name">Binance</span></span></span>
                                                                                <!----></div>
                                                                            <div class="multiselect__content-wrapper"
                                                                                 style="max-height: 300px; display: none;">
                                                                                <ul class="multiselect__content"
                                                                                    style="display: inline-block;"> <!---->
                                                                                    <li class="multiselect__element"><span
                                                                                                data-select=""
                                                                                                data-selected=""
                                                                                                data-deselect=""
                                                                                                class="multiselect__option"><span
                                                                                                    data-v-7d171b2a=""
                                                                                                    class="exchange-image"><img
                                                                                                        data-v-7d171b2a=""
                                                                                                        src="./trade/Poloniex.png"></span>
			                                            Poloniex
			                                        </span> <!----></li>
                                                                                    <li class="multiselect__element"><span
                                                                                                data-select=""
                                                                                                data-selected=""
                                                                                                data-deselect=""
                                                                                                class="multiselect__option multiselect__option--highlight multiselect__option--selected"><span
                                                                                                    data-v-7d171b2a=""
                                                                                                    class="exchange-image"><img
                                                                                                        data-v-7d171b2a=""
                                                                                                        src="./trade/Binance.png"></span>
			                                            Binance
			                                        </span> <!----></li>
                                                                                    <li class="multiselect__element"><span
                                                                                                data-select=""
                                                                                                data-selected=""
                                                                                                data-deselect=""
                                                                                                class="multiselect__option"><span
                                                                                                    data-v-7d171b2a=""
                                                                                                    class="exchange-image"><img
                                                                                                        data-v-7d171b2a=""
                                                                                                        src="./trade/BitMEX.png"></span>
			                                            BitMEX
			                                        </span> <!----></li>
                                                                                    <li class="multiselect__element"><span
                                                                                                data-select=""
                                                                                                data-selected=""
                                                                                                data-deselect=""
                                                                                                class="multiselect__option"><span
                                                                                                    data-v-7d171b2a=""
                                                                                                    class="exchange-image"><img
                                                                                                        data-v-7d171b2a=""
                                                                                                        src="./trade/BitMEX TestNet.png"></span>
			                                            BitMEX TestNet
			                                        </span> <!----></li>
                                                                                    <li style="display: none;"><span
                                                                                                class="multiselect__option">No elements found. Consider changing the search query.</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-6">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Название</label> <input
                                                                            data-v-7d171b2a="" type="text"
                                                                            class="form-control custom-input"></div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-6">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Key</label> <input
                                                                            data-v-7d171b2a="" type="text"
                                                                            class="form-control custom-input"></div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="col-md-12 col-xl-6">
                                                                <div data-v-7d171b2a="" class="form-group"><label
                                                                            data-v-7d171b2a="">Secret</label> <input
                                                                            data-v-7d171b2a="" type="text"
                                                                            class="form-control custom-input"></div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="col-12">
                                                                <div data-v-7d171b2a="" class="how-to-add-exchange-tip">
                                                                    Дорогой пользователь, <b>получай 20% скидку</b> <br>на
                                                                    оплату комиссий на Binance по <a class="ref-link-a"
                                                                                                     href="https://www.binance.com/ru/register?ref=J6YRQ5I7"
                                                                                                     target="_blank">данной
                                                                        ссылке</a>.
                                                                </div>
                                                            </div>
                                                            <div data-v-7d171b2a="" class="col-12">
                                                                <div data-v-7d171b2a="" class="how-to-add-exchange-tip">
                                                                    Для создания Key и Secret на Binance вам нужно
                                                                    авторизоваться на бирже и пройти по ссылке:
                                                                    <a data-v-7d171b2a=""
                                                                       href="https://www.binance.com/userCenter/createApi.html"
                                                                       target="_blank">https://www.binance.com/userCenter/createApi.html</a>
                                                                    <!----> <!----> <!----></div>
                                                            </div>
                                                        </div>
                                                        <div data-v-7d171b2a="" class="row">
                                                            <div data-v-7d171b2a="" class="col-12"><!----></div>
                                                        </div>
                                                    </div>
                                                    <div data-v-7d171b2a="" class="block-inner block-inner-buttons">
                                                        <div data-v-7d171b2a="" class="form-buttons"><span
                                                                    data-v-7d171b2a="" id="add-user-exchange-button"><!----> <button
                                                                        data-v-7d171b2a=""  type="submit"
                                                                        class="btn btn-sm btn-tm btn-tm-big">Добавить аккаунт</button></span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div   class="mobile-footer"><!----> <!----> <!----> <!---->
                            <div   class="router-link-default">
                                <div   class="mobile-footer-item menu-disabled">
                                    <div   class="ifont icon-four-squares-with-frame-shape"></div>
                                    <div   class="menu-item-text">Дашборд</div>
                                </div>
                            </div>
                            <div   class="router-link-default">
                                <div   class="mobile-footer-item menu-disabled">
                                    <div   class="ifont icon-coins"></div>
                                    <div   class="menu-item-text">Трейд</div>
                                </div>
                            </div>
                            <div   class="router-link-default">
                                <div   class="mobile-footer-item menu-disabled">
                                    <div   class="ifont icon-wifi-signal-waves"></div>
                                    <div   class="menu-item-text">Авто Тр.</div>
                                </div>
                            </div>
                            <div   class="router-link-default">
                                <div   class="mobile-footer-item menu-disabled">
                                    <div   class="ifont icon-arrowhead"></div>
                                    <div   class="menu-item-text">Кабинет</div>
                                </div>
                            </div>
                            <a   href="https://trade-mate.io/w/tasks"
                               class="router-link-default tasks-link">
                                <div   class="mobile-footer-item">
                                    <div   class="ifont icon-circular-chart"></div>
                                    <div   class="menu-item-text">Статистика</div>
                                </div>
                            </a></div>
                    </div>

                <div class="sys-messages-container" style="top: 70px;"></div>
            </div>
            <div class="mobile-version-info" style="display: none;">
                <div class="ifont icon-lock"></div>
                <p class="text0">Мобильная версия находится в разработке.</p>
                <p class="text1">На текущий момент вы можете использовать полную версию на вашем компьютере.</p></div>
        </div>
    </div>
    </html>


<link rel="stylesheet" href="./trade/bootstrap.css">
<link rel="stylesheet" href="./trade/cryptex-graphs.css">
<link rel="stylesheet" href="./trade/fontawesome-all.min.css">
<link rel="stylesheet" href="./trade/swiper.min.css">
<link href="./trade/enjoyhint.css" rel="stylesheet">
<link rel="stylesheet" href="./trade/style.css">
<link rel="stylesheet" href="./trade/stylesheet.css">
<link rel="stylesheet" href="./trade/stylesheet(1).css">
<link rel="stylesheet" href="./trade/stylesheet(2).css">
<link rel="stylesheet" href="./trade/stylesheet(3).css">
<link rel="stylesheet" type="text/css" href="./trade/daterangepicker.css">

@stop
@section('css')
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}


@stop