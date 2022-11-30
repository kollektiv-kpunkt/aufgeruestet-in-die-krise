# Configuration

**Skala (Object *scale*)**
-
- **Width:** Die Breite der ganzen Skala in Franken (einfach ausprobieren)
- **Blocks** *objects*
  - Type: Text oder Block
  - Color: Farbe des Texts oder des Blocks
  - Position: Position in Relation zum Anfang der Skala.
  - Width: Breite des Inhalte als Anteil der gesamtem Skala (Empfehlung: Auf der Skala alle Blöcke gleich breit, bei 4 Blöcken 25%, bei 5 Blöcken also 20% etc.)
  - Amount (nur Type=Block): Wie viel Geld der Block darstellt
  - Description (nur Type=Block): Beschreibung des Blocks
  - Height (nur Type=Block): Höhe des Blocks als Anteil an der gesamten Höhe (20 = 1/20 der gesamten Höhe, 60 = 1/60 etc)

<br>

**Chart Upper (Array *chart_upper* of objects)**
-
- **Text:** Text, welcher angezeigt werden soll.
- **Position:** Position in Relation zum Anfang des Charts.
- **Width:** Breite als Anteil des gesamten Charts
  - *default: 0.5%*

<br>

**Chart Mid (Array *chart_mid* of objects)**
-
- **Type:** Text oder Block
- **Color:** Farbe des Texts oder des Blocks
- **Text (nur Type=Text):** Text, welcher angezeigt werden soll.
- **Position:** Position in Relation zum Anfang des Charts.
- **Width:** Breite als Anteil des gesamten Charts, **bei Blöcken > 1'000'000 CHF nicht angeben.**
  - *default: 0.5%*
- **Amount (nur Type=Block):** Wie viel Geld der Block darstellt
- **Description (nur Type=Block):** Beschreibung des Blocks
- **Height (nur Type=Block):** Höhe des Blocks als Anteil an der gesamten Höhe (20 = 1/20 der gesamten Höhe, 60 = 1/60 etc)