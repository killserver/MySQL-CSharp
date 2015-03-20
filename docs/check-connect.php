<h1>Check_Connect</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
bool Check_Connect ( void )
</pre>
Возвращает состояние подключения к базе данных в <a href="https://msdn.microsoft.com/ru-ru/library/c8f5xwh7.aspx" target="_blank">bool</a>-евом значении.<br />
<br />
<h2>Пример:</h2><hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
            Console.WriteLine("Подключение: " + Test.Check_Connect());
            Console.ReadLine();
        }
    }
}
</pre>
