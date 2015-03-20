<h1>Version</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
string Version ( void )
</pre>
Возвращает версию Базы данных с которой установленно соединение.<br />
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
            Console.WriteLine("Версия Базы данных: " + Test.Version());
            Console.ReadLine();
        }
    }
}
</pre>
