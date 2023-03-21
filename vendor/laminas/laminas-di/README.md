# laminas-di

[![Build Status](https://github.com/laminas/laminas-di/workflows/continuous-integration.yml/badge.svg)](https://github.com/laminas/laminas-di/actions/workflows/continuous-integration.yml)

> ## 🇷🇺 Русским гражданам
> 
> Мы, участники Laminas, родились и живем в разных странах. У многих из нас есть друзья, родственники и коллеги как в России, так и в Украине. Некоторые из нас родились в России. Некоторые из нас живут в России. У некоторых бабушки и дедушки сражались с фашистами во Второй мировой войне. Здесь никто не поддерживает фашизм.
> 
> У одного из нас есть украинская родственница, которая спаслась из дома вместе с сыном. Поезд задержался из-за бомбежки на дороге впереди. У нас есть друзья, которые прячутся в бомбоубежищах. Мы с тревогой ждем весточки от них после воздушных налетов, которые беспорядочно наносят удары и попадают по больницам, школам, детским садам и домам. Мы не берем это из каких-либо СМИ. Мы наблюдаем это напрямую.
> 
> Вы доверяете нам достаточно, чтоб использовать наши программы, и мы просим вас довериться нам вновь. Мы нуждаемся в помощи. Выходите и протестуйте против этой бесполезной войны. Остановите кровопролитие. Скажите "Нет войне!"
> 
> ## 🇺🇸 To Citizens of Russia
> 
> We at Laminas come from all over the world. Many of us have friends, family and colleagues in both Russia and Ukraine. Some of us were born in Russia. Some of us currently live in Russia. Some have grandparents who fought Nazis in World War II. Nobody here supports fascism.
> 
> One team member has a Ukrainian relative who fled her home with her son. The train was delayed due to bombing on the road ahead. We have friends who are hiding in bomb shelters. We anxiously follow up on them after the air raids, which indiscriminately fire at hospitals, schools, kindergartens and houses. We're not taking this from any media. These are our actual experiences.
> 
> You trust us enough to use our software. We ask that you trust us to say the truth on this. We need your help. Go out and protest this unnecessary war. Stop the bloodshed. Say "stop the war!"

laminas-di provides autowiring to implement Inversion of Control (IoC) containers.
IoC containers are widely used to create object instances that have all
dependencies resolved and injected. Dependency Injection containers are one form
of IoC – but not the only form.

laminas-di is designed to be simple, fast and reusable. It provides the following features:

- Constructor injection
- Autowiring:
  - Recursively through all dependencies
  - With configured type preferences
  - with configured injections
  - With injections passed in the create() call
- Code generators to create factories usable by other IoC containers like Laminas\ServiceManager

It does __not__ provide:

- Setter, interface, property or any other injection method than constructor injection
- Support for factories
- Declaring shared/unshared instances
  - the injector always creates new instances
  - the default container always shares instances
- Support for variadic arguments in __construct

If you need these features combine it with another IoC container such as
[laminas-servicemanager](https://docs.laminas.dev/laminas-servicemanager/).

- File issues at https://github.com/laminas/laminas-di/issues
- Documentation is at https://docs.laminas.dev/laminas-di/
